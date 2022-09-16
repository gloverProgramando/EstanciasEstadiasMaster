<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class documentos extends Model
{
    use HasFactory;
    
    protected $table = 'documentos';
    protected $primaryKey='id';

    public static function requestInsertDoc($data) {

        try {

            $response = self::insertDoc($data);
            if (isset($response["code"]) && $response["code"] == 200) {
                return $response;
            } else {
                return $response;
            }
        } catch(Exception $e) {
            return array(
                "code"  => 500,
                "success"   => false,
                "message"   => $e->getMessage()
            );
        }
    }

    public static function insertDoc($data ) {

        $arrayResponse = array();

        try {
            $docId = DB::table('documentos')->insertGetId($data);

            $arrayResponse = array(
                "code"      => 200,
                "message"   => "Se ha agregado el registro",
                "id"        => $docId
            );
        } catch (Exception $e) {
            $arrayResponse = array(
                "code"      => 500,
                "message"   => "Ocurrio un error al intentar agregar el registro. Error" . $e->getMessage()
            );
        }

        return $arrayResponse;
    }

    public function respuesta() {
        return $this->hasMany(respuesta_doc::class);
    }
}
