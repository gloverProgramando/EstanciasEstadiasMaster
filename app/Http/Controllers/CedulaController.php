<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Asesor_Aca;
use App\Models\Asesor_Emp;
use App\Models\Empresa;
use App\Models\Proyecto;
use App\Models\Formulario;
use App\Models\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CedulaController extends Controller
{   
    public function ver($id_proces){//*funcional
        return view('home',['proceso'=>$id_proces]);
    }

    public function store(Request $request) {//*funcional
        
        $request->validate([
            'ape_paterno' => 'required|max:40',
            'ape_materno' => 'required|max:40',
            'nombres' => 'required|max:100',
            'tel' => 'required|digits:10',
            'matricula' => 'required|max:40',
            'email_per' => 'required|email|max:40',
            'email' => 'required|email|max:40',
            'no_ss' => 'required|min:11|numeric',
            'direccion' => 'required|max:255',

            'nombre_emp' => 'required|max:255',
            'giro' => 'required|max:40',
            'direccion_emp' => 'required|max:255',
            'ape_paterno_rh' => 'required|max:40',
            'ape_materno_rh' => 'required|max:40',
            'nombres_rh' => 'required|max:100',
            'tel_lada' => 'nullable|digits:3',
            'tel_num' => 'required|min:10|numeric',
            'tel_ext' => 'nullable|digits:3',
            'email_emp' => 'required|max:40',

            'ape_paterno_ae' => 'required|max:40',
            'ape_materno_ae' => 'required|max:40',
            'nombres_ae' => 'required|max:100',
            'tel_lada_ae' => 'nullable|digits:3',
            'tel_num_ae' => 'required|digits:7',
            'email_ae' => 'required|max:40',

            'ape_paterno_aa' => 'required|max:40',
            'ape_materno_aa' => 'required|max:40',
            'nombres_aa' => 'required|max:100',
            'tel_lada_aa' => 'nullable|digits:3',
            'tel_num_aa' => 'required|digits:7',
            'email_aa' => 'required|max:40',

            'nombre_proyecto' => 'required|max:255'
        ]);
        
        $arrayResult = array();

        try{
            
            $ape_paterno        = $request->input('ape_paterno');
            $ape_materno        = $request->input('ape_materno');
            $nombres            = $request->input('nombres');
            $tel                = $request->input('tel');
            $matricula          = $request->input('matricula');
            $email_per          = $request->input('email_per');
            $email              = $request->input('email');
            $no_ss              = $request->input('no_ss');
            $direccion          = $request->input('direccion');
            $procesos           = json_decode( $request->input('id_procesos') );
            $carrera            = json_decode( $request->input('id_carrera') );

            $nombre_emp         = $request->input('nombre_emp');
            $giro               = $request->input('giro');
            $direccion_emp      = $request->input('direccion_emp');
            $ape_paternorh      = $request->input('ape_paterno_rh');
            $ape_maternorh      = $request->input('ape_materno_rh');
            $nombresrh          = $request->input('nombres_rh');
            $tel_lada           = $request->input('tel_lada');
            $tel_num            = $request->input('tel_num');
            $tel_ext            = $request->input('tel_ext');
            $email_emp          = $request->input('email_emp');
            $tipo               = json_decode( $request->input('id_tipo') );

            $ape_paterno_ae     = $request->input('ape_paterno_ae');
            $ape_materno_ae     = $request->input('ape_materno_ae');
            $nombres_ae         = $request->input('nombres_ae');
            $tel_lada_ae        = $request->input('tel_lada_ae');
            $tel_num_ae         = $request->input('tel_num_ae');
            $email_ae           = $request->input('email_ae');
            $cargo_ae              = json_decode( $request->input('id_cargo_ae') );

            $ape_paterno_aa     = $request->input('ape_paterno_aa');
            $ape_materno_aa     = $request->input('ape_materno_aa');
            $nombres_aa         = $request->input('nombres_aa');
            $tel_lada_aa        = $request->input('tel_lada_aa');
            $tel_num_aa         = $request->input('tel_num_aa');
            $email_aa           = $request->input('email_aa');
            $cargo_aa              = json_decode( $request->input('id_cargo_aa') );

            $nombre_pro         = $request->input('nombre_proyecto');

            /*$currentDate = date("Y-m-d H:i:s");*/

            $data = array(
                'ape_paterno'   => $ape_paterno,
                'ape_materno'   => $ape_materno,
                'nombres'       => $nombres,
                'tel'           => $tel,
                'matricula'     => $matricula,
                'email_per'     => $email_per,
                'email'         => $email,
                'no_ss'         => $no_ss,
                'direccion'     => $direccion,
                'id_procesos'   => $procesos,
                'id_carrera'    => $carrera
            );

            $response_alumno = Alumno::requestInsertAlumno($data);
            
            $data2 = array(
                'nombre_emp'    => $nombre_emp,
                'giro'          => $giro,
                'direccion_emp' => $direccion_emp,
                'ape_paterno_rh'=> $ape_paternorh,
                'ape_materno_rh'=> $ape_maternorh,
                'nombres_rh'    => $nombresrh,
                'tel_lada'      => $tel_lada,
                'tel_num'       => $tel_num,
                'tel_ext'       => $tel_ext,
                'email_emp'     => $email_emp,
                'id_tipo'       => $tipo,
                //'ID_Alumno'     => $response_alumno['id']
            );

            if ( isset($response_alumno["code"]) && $response_alumno["code"] == 200 ) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
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
                    $data3 = array(
                        'ape_paterno_ae'=> $ape_paterno_ae,
                        'ape_materno_ae'=> $ape_materno_ae,
                        'nombres_ae'    => $nombres_ae,
                        'tel_lada_ae'   => $tel_lada_ae,
                        'tel_num_ae'    => $tel_num_ae,
                        'email_ae'      => $email_ae,
                        'id_cargo_ae'      => $cargo_ae,
                        //'ID_Alumno'     => $response_alumno['id']
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

                    $data4 = array(

                        'ape_paterno_aa'=> $ape_paterno_aa,
                        'ape_materno_aa'=> $ape_materno_aa,
                        'nombres_aa'    => $nombres_aa,
                        'tel_lada_aa'   => $tel_lada_aa,
                        'tel_num_aa'    => $tel_num_aa,
                        'email_aa'      => $email_aa,
                        'id_cargo_aa'      => $cargo_aa,
                        //'ID_Alumno'     => $response_alumno['id']
                    );

                    $response_asesor_aca = Asesor_Aca::requestInsertAsesor_Aca($data4);

                    if ( isset($response_asesor_aca["code"]) && $response_asesor_aca["code"] == 200 ) {
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
                                'message'   => $response_asesor_aca['message'],
                                'code'      => $response_asesor_aca['code']
                            ),
                        );
                    }

                } else {
                    $arrayResult = array(
                        'Response'  => array(
                            'ok'        => false,
                            'message'   => $response_empresa['message'],
                            'code'      => $response_empresa['code']
                        ),
                    );
                }

                $data5 = array(

                    'nombre_proyecto'   => $nombre_pro,
                    //'ID_Alumno'         => $response_alumno['id']
                );

                $response_proyecto = Proyecto::requestInsertProyecto($data5);

                if ( isset($response_proyecto["code"]) && $response_proyecto["code"] == 200 ) {
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
                            'message'   => $response_proyecto['message'],
                            'code'      => $response_proyecto['code']
                        ),
                    );
                }

                $data6 = array(
                    'id_alumno'     =>  $response_alumno['id'],
                    'id_empresa'    =>  $response_empresa['id'],
                    'id_asesor_emp' =>  $response_asesor_emp['id'],
                    'id_asesor_aca' =>  $response_asesor_aca['id'],
                    'id_proyecto'   =>  $response_proyecto['id'],
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

            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_alumno['message'],
                        'code'      => $response_alumno['code']
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

        return redirect(route('registro_final_cedula.index',[$procesos]))->with('success','F-03 Agregado');
    }

}


