<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\alumno_def;
use App\Models\Asesor_Emp;
use App\Models\asesor_empresarial_def;
use App\Models\Empresa;
use App\Models\Formulario;
use App\Models\formulario_def;
use App\Models\Proyecto;
use App\Models\Respuesta;
use App\Models\respuesta_def;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;
class carta_aceptacionController extends Controller
{
    function ver(){
        $vinculacion=DB::table('universidad')->get();
        return view('usuario.f01Formulario_estadia',['vinculacion'=>$vinculacion]);
    }
    public function store_f01(Request $request) {
        
        
        
        $arrayResult = array();

        try{
            
            $ape_paterno_ae     = $request->input('ape_paterno_ae');
            $ape_materno_ae     = $request->input('ape_materno_ae');
            $nombres_ae         = $request->input('nombres_ae');

                $puesto             = $request->input('puesto');

            $nombre_emp         = $request->input('nombre_emp');

            $ape_paterno        = $request->input('ape_paterno');
            $ape_materno        = $request->input('ape_materno');
            $nombres            = $request->input('nombres');
            $matricula          = $request->input('matricula');
            $carrera            = json_decode( $request->input('id_carrera') );


                $periodo            = json_decode( $request->input('periodo') );
                $cuatrimestre        = json_decode( $request->input('cuatrimestre') );


            /*$currentDate = date("Y-m-d H:i:s");*/
            //alumno
            $data = array(
                'ape_paterno'   => $ape_paterno,
                'ape_materno'   => $ape_materno,
                'nombres'       => $nombres,
                'matricula'     => $matricula,
                'id_carrera'    => $carrera
            );

            $response_alumno = Alumno::requestInsertAlumno($data);         
            if ( isset($response_alumno["code"]) && $response_alumno["code"] == 200 ) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );

            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_alumno['message'],
                        'code'      => $response_alumno['code']
                    ),
                );
            }
            //empresa
            $data2 = array(
                'nombre_emp'    => $nombre_emp,
            );

            $response_empresa = Empresa::requestInsertEmpresa($data2);

            if ( isset($response_empresa["code"]) && $response_empresa["code"] == 200 ) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );
               
                
            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_empresa['message'],
                        'code'      => $response_empresa['code']
                    ),
                );
            }
            //asesor emp
            $data3 = array(
                'ape_paterno_ae'=> $ape_paterno_ae,
                'ape_materno_ae'=> $ape_materno_ae,
                'nombres_ae'    => $nombres_ae,
            );
            $response_asesor_emp = Asesor_Emp::requestInsertAsesor_Emp($data3);

            if ( isset($response_asesor_emp["code"]) && $response_asesor_emp["code"] == 200 ) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );

            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_asesor_emp['message'],
                        'code'      => $response_asesor_emp['code']
                    ),
                );
            }

            //formulario
            $data6 = array(
                'id_alumno'     =>  $response_alumno['id'],
                'id_empresa'    =>  $response_empresa['id'],
                'id_asesor_emp' =>  $response_asesor_emp['id'],
                'status'        =>  1
            );

            $response_formulario = Formulario::requestInsertFormulario($data6);

            if (isset($response_formulario["code"]) && $response_formulario["code"] == 200) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );

            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_formulario['message'],
                        'code'      => $response_formulario['code']
                    ),
                );
            }

            $data7 = array(
                'id_usuario'    => Auth::user()->id,
                'id_formulario' => $response_formulario['id']
            );
            //respuesta
            $response_respuesta = Respuesta::requestInsertRespuesta($data7);

            if ( isset($response_respuesta["code"]) && $response_respuesta["code"] == 200) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );
            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_respuesta['message'],
                        'code'      => $response_respuesta['code']
                    ),
                );
            }
            //datos asesor empresarial def
            $datos = array(
                'puesto'    => $puesto
            );

            $response_a_empresarial = asesor_empresarial_def::requestInsertAsesor_EmpD($datos);

            if ( isset($response_a_empresarial["code"]) && $response_a_empresarial["code"] == 200) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );
            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_a_empresarial['message'],
                        'code'      => $response_a_empresarial['code']
                    ),
                );
            }
            //datos alumno def
            $datos1 = array(
                'id_periodo'    => $periodo,
                'cuatrimestre'=>$cuatrimestre
            );

            $response_alumno_def = alumno_def::requestInsertAlumnoD($datos1);

            if ( isset($response_alumno_def["code"]) && $response_alumno_def["code"] == 200) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );
            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_alumno_def['message'],
                        'code'      => $response_alumno_def['code']
                    ),
                );
            }

            //datos formulario def
            $datos2 = array(
                'id_alumno'     =>  $response_alumno_def['id'],
                'id_asesor_emp' =>  $response_a_empresarial['id'],
            );

            $response_formulario_def = formulario_def::requestInsertFormularioD($datos2);

            if (isset($response_formulario_def["code"]) && $response_formulario_def["code"] == 200) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );

            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_formulario_def['message'],
                        'code'      => $response_formulario_def['code']
                    ),
                );
            }
            //respuesta def
            $datos3 = array(
                'id_usuario'    => Auth::user()->id,
                'id_formulario' => $response_formulario_def['id']
            );

            $response_respuesta_def = respuesta_def::requestInsertRespuesta_def($datos3);

            if ( isset($response_respuesta_def["code"]) && $response_respuesta_def["code"] == 200) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );
            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_respuesta_def['message'],
                        'code'      => $response_respuesta_def['code']
                    ),
                );
            }

        } catch(\Illuminate\Database\QueryException $ex) {
            $arrayResult = array(
                'Response'  => array(
                    'message'   => "Error: " . " - " . "Fallo :v",
                    "code"      => "500"
                )
            );
        } catch( Exception $ex ){
            $arrayResult = array(
              'Response' => array(
                'message' => "Error: " . " - " . $ex->getMessage(),
                "code"    => "500"
              )
            );
        }

        return json_encode($arrayResult);
    }
}
