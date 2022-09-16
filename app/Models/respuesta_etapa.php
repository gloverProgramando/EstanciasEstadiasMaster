<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;
class respuesta_etapa extends Model
{
    use HasFactory;
    protected $table = 'respuesta_etapa';

    public static function requestInsertRespuesta($data,$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data13,$data14) {

        try{

            $response = self::insertRespuesta($data,$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data13,$data14);
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

    public static function insertRespuesta($data,$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data13,$data14) {

        $arrayResponse = array();

        try{
            $id = DB::table('respuesta_etapa')->insertGetId($data);
            $id1 = DB::table('respuesta_etapa')->insertGetId($data1);
            $id2 = DB::table('respuesta_etapa')->insertGetId($data2);
            $id3 = DB::table('respuesta_etapa')->insertGetId($data3);
            $id4 = DB::table('respuesta_etapa')->insertGetId($data4);
            $id5 = DB::table('respuesta_etapa')->insertGetId($data5);
            $id6 = DB::table('respuesta_etapa')->insertGetId($data6);
            $id7 = DB::table('respuesta_etapa')->insertGetId($data7);
            $id8 = DB::table('respuesta_etapa')->insertGetId($data8);
            $id9 = DB::table('respuesta_etapa')->insertGetId($data9);
            $id10 = DB::table('respuesta_etapa')->insertGetId($data10);
            $id11 = DB::table('respuesta_etapa')->insertGetId($data11);
            $id12 = DB::table('respuesta_etapa')->insertGetId($data12);
            $id13 = DB::table('respuesta_etapa')->insertGetId($data13);
            $id14 = DB::table('respuesta_etapa')->insertGetId($data14);
            $arrayResponse = array(
                "code"      => 200,
                "message"   => "Se ha agragado el registro",
                "id1" => $id,
                /*"id2" => $id1,
                "id3" => $id2,
                "id4" => $id3,
                "id5" => $id4,
                "id6" => $id5,
                "id7" => $id6,
                "id8" => $id7,
                "id9" => $id8,
                "id10" => $id9,
                "id11" => $id10,
                "id12" => $id11,
                "id13" => $id12,
                "id14" => $id13,
                "id15" => $id14*/

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
