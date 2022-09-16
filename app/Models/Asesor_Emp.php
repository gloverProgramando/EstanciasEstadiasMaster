<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Exception;

class Asesor_Emp extends Model
{
    protected $table = 'asesor_empresarial';

    /**
     * LLamada a la peticion para agregar un nuevo marcador
     * Tambien devuelve la llamada si Ocurrió algun error
    */

    public static function requestInsertAsesor_Emp($data) {

        try{

            $response = self::InsertAsesor_Emp($data);
            if (isset($response["code"]) && $response["code"] == 200){
                return $response;
            } else {
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

    public static function insertAsesor_Emp($data) {

        $arrayResponse = array();

        try{
            $asesorEmp = \DB::table('asesor_empresarial')->insertGetId($data);
            
            $arrayResponse = array(
                "code"      => 200,
                "message"   => "Se ha agragado el registro",
                "id" => $asesorEmp
            );
        }catch (Exception $e) {
            $arrayResponse = array(
                "code"      => 500,
                "message"   => "Ocurrio un error al intentar agregar el registro. Error" . $e->getMessage()
            );
        }

        return $arrayResponse;
    }
}
