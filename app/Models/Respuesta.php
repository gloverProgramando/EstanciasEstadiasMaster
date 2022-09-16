<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Respuesta extends Model
{
    use HasFactory;

    protected $table = 'respuesta';

    public static function getAllRespuesta() {
        return \DB::table('respuesta')
                    ->join('users', 'users.id', '=', 'respuesta.id_usuario')
                    ->join('formulario', 'formulario.id', '=', 'respuesta.id_formulario')
                    ->select('users.name', 'formulario.status')
                    ->get();
    }

    /**
     * LLamada a la peticion para agregar un nuevo marcador
     * Tambien devuelve la llamada si Ocurrió algun error
    */

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
            $empresaId = \DB::table('respuesta')->insertGetId($data);
            
            $arrayResponse = array(
                "code"      => 200,
                "message"   => "Se ha agragado el registro",
                "id" => $empresaId
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
