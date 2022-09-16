<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Formulario extends Model
{
    use HasFactory;

    protected $table = 'formulario';

    public static function requestInsertFormulario($data) {

        try {

            $response = self::insertFormulario($data);
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

    public static function insertFormulario($data ) {

        $arrayResponse = array();

        try {
            $formularioId = \DB::table('formulario')->insertGetId($data);

            $arrayResponse = array(
                "code"      => 200,
                "message"   => "Se ha agregado el registro",
                "id"        => $formularioId
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
        return $this->hasMany(Respuesta::class);
    }
}
