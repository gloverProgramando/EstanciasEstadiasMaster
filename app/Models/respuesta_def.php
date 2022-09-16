<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class respuesta_def extends Model
{
    use HasFactory;
    protected $table = 'respuesta_def';

    public static function getAllRespuesta_def() {
        return DB::table('respuesta')
                    ->join('users', 'users.id', '=', 'respuesta.id_usuario')
                    ->join('formulario', 'formulario.id', '=', 'respuesta.id_formulario')
                    ->select('users.name', 'formulario.status')
                    ->get();
    }

    /**
     * LLamada a la peticion para agregar un nuevo marcador
     * Tambien devuelve la llamada si Ocurrió algun error
    */

    public static function requestInsertRespuesta_def($data) {

        try{

            $response = self::insertRespuesta_def($data);
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

    public static function insertRespuesta_def($data) {

        $arrayResponse = array();

        try{
            $respuesta= DB::table('respuesta_def')->insertGetId($data);
            
            $arrayResponse = array(
                "code"      => 200,
                "message"   => "Se ha agragado el registro",
                "id" => $respuesta
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
