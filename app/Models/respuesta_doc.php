<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class respuesta_doc extends Model
{
    use HasFactory;
    protected $table = 'respuesta_doc';
    protected $primaryKey='id';

    public static function getAllRespuesta() {
        return DB::table('respuesta_doc')
                    ->join('users', 'users.id', '=', 'respuesta_doc.id_usuario')
                    ->join('documentos', 'documentos.id_d', '=', 'respuesta_doc.id_documentos')
                    ->get();
    }
    public static function requestInsertRespuesta($data) {

        try{

            $response = self::insertRespuesta($data);
            if (isset($response["code"]) && $response["code"] == 200) {
                return $response;
            }else{
                return $response;
            }
        }catch(Exception $e) {
            return array(
                "code" => 500,
                "success" => false,
                "message" => $e->getMessage()
              );
        }
    }

    /**
     * Agrega una marca nueva
    */

    public static function insertRespuesta($data) {

        $arrayResponse = array();

        try{
            $id = DB::table('respuesta_doc')->insertGetId($data);
            
            $arrayResponse = array(
                "code"      => 200,
                "message"   => "Se ha agragado el registro",
                "id" => $id
            );
        }catch (Exception $e) {
            $arrayResponse = array(
                "code"      => 500,
                "message"   => "Ocurrio un error al intentar agregar el registro. Error" . $e->getMessage()
            );
        }

        return $arrayResponse;
    }

    //relacion uno a muchos (inversa)

    public function user() {
        return $this->belongsTo(User::class);
    }

}
