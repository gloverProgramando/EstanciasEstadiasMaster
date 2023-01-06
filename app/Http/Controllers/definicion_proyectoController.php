<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\alumno_def;
use App\Models\Asesor_Aca;
use App\Models\Asesor_Emp;
use App\Models\asesor_empresarial_def;
use App\Models\detalle_def;
use App\Models\Empresa;
use App\Models\etapas_del_proyecto;
use App\Models\Proyecto;
use App\Models\Formulario;
use App\Models\formulario_def;
use App\Models\proyecto_def;
use App\Models\Respuesta;
use App\Models\respuesta_def;
use App\Models\respuesta_etapa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class definicion_proyectoController extends Controller
{
    //valida y guarda la definicion
    public function store(Request $request) {//*funcional
        $request->validate([
            'grupo' => 'required|max:45',
            'id_proceso' => 'required',
            'puesto' => 'required|max:200',
            'objetivosP' => 'required|max:100',

            'actividades' => 'required|max:250',
            'resultados' => 'required|max:250',
            'evidencia' => 'required|max:250',
            'instrumentos' => 'required|max:250',
            'asignaturas' => 'required|max:250',
            'topicos' => 'required|max:250',
            'estrategias' => 'required|max:250',

            'etapas_proyecto_1' => 'required|max:200',
            'etapas_proyecto_2' => 'required|max:200',
            'etapas_proyecto_3' => 'required|max:200',
            'etapas_proyecto_4' => 'max:200',
            'etapas_proyecto_5' => 'max:200',
            'etapas_proyecto_6' => 'max:200',
            'etapas_proyecto_7' => 'max:200',
            'etapas_proyecto_8' => 'max:200',
            'etapas_proyecto_9' => 'max:200',
            'etapas_proyecto_10' => 'max:200',
            'etapas_proyecto_11' => 'max:200',
            'etapas_proyecto_12' => 'max:200',
            'etapas_proyecto_13' => 'max:200',
            'etapas_proyecto_14' => 'max:200',
            'etapas_proyecto_15' => 'max:200',

            'fecha_inicio_1' => 'required',
            'fecha_inicio_2' => 'required',
            'fecha_inicio_3' => 'required',

            'fecha_final_1' => 'required',
            'fecha_final_2' => 'required',
            'fecha_final_3' => 'required',

            'tiempo_1' => 'required|integer',
            'tiempo_2' => 'required|integer',
            'tiempo_3' => 'required|integer',


            'descripcion_competencias_1' => 'required|max:250',
            'descripcion_competencias_2' => 'required|max:250',
            'descripcion_competencias_3' => 'required|max:250',
            'descripcion_competencias_4' => 'max:250',
            'descripcion_competencias_5' => 'max:250',            
            'descripcion_competencias_6' => 'max:250',            
            'descripcion_competencias_7' => 'max:250',            
            'descripcion_competencias_8' => 'max:250',            
            'descripcion_competencias_9' => 'max:250',            
            'descripcion_competencias_10' => 'max:250',            
            'descripcion_competencias_11' => 'max:250',            
            'descripcion_competencias_12' => 'max:250',
            'descripcion_competencias_13' => 'max:250',            
            'descripcion_competencias_14' => 'max:250',            
            'descripcion_competencias_15' => 'max:250',            
            
            
            
        ]);
        $arrayResult = array();
      
        try{

           
            $grupo                 = $request->input('grupo');
            $procesos              = json_decode( $request->input('id_proceso') );
          
            $puesto                = $request->input('puesto');
            
            $objetivos_pro         = $request->input('objetivosP');

            $etapas_proyecto_1           = $request->input('etapas_proyecto_1');
            $etapas_proyecto_2           = $request->input('etapas_proyecto_2');
            $etapas_proyecto_3           = $request->input('etapas_proyecto_3');
            $etapas_proyecto_4           = $request->input('etapas_proyecto_4');
            $etapas_proyecto_5           = $request->input('etapas_proyecto_5');
            $etapas_proyecto_6           = $request->input('etapas_proyecto_6');
            $etapas_proyecto_7           = $request->input('etapas_proyecto_7');
            $etapas_proyecto_8           = $request->input('etapas_proyecto_8');
            $etapas_proyecto_9           = $request->input('etapas_proyecto_9');
            $etapas_proyecto_10           = $request->input('etapas_proyecto_10');
            $etapas_proyecto_11           = $request->input('etapas_proyecto_11');
            $etapas_proyecto_12           = $request->input('etapas_proyecto_12');
            $etapas_proyecto_13           = $request->input('etapas_proyecto_13');
            $etapas_proyecto_14           = $request->input('etapas_proyecto_14');
            $etapas_proyecto_15           = $request->input('etapas_proyecto_15');

            $semana_inicio_1              = $request->input('fecha_inicio_1');
            $semana_inicio_2              = $request->input('fecha_inicio_2');
            $semana_inicio_3              = $request->input('fecha_inicio_3');
            $semana_inicio_4              = $request->input('fecha_inicio_4');
            $semana_inicio_5              = $request->input('fecha_inicio_5');
            $semana_inicio_6              = $request->input('fecha_inicio_6');
            $semana_inicio_7              = $request->input('fecha_inicio_7');
            $semana_inicio_8              = $request->input('fecha_inicio_8');
            $semana_inicio_9              = $request->input('fecha_inicio_9');
            $semana_inicio_10              = $request->input('fecha_inicio_10');
            $semana_inicio_11              = $request->input('fecha_inicio_11');
            $semana_inicio_12              = $request->input('fecha_inicio_12');
            $semana_inicio_13              = $request->input('fecha_inicio_13');
            $semana_inicio_14              = $request->input('fecha_inicio_14');
            $semana_inicio_15              = $request->input('fecha_inicio_15');

            $semana_final_1               = $request->input('fecha_final_1');
            $semana_final_2               = $request->input('fecha_final_2');
            $semana_final_3               = $request->input('fecha_final_3');
            $semana_final_4               = $request->input('fecha_final_4');
            $semana_final_5               = $request->input('fecha_final_5');
            $semana_final_6               = $request->input('fecha_final_6');
            $semana_final_7               = $request->input('fecha_final_7');
            $semana_final_8               = $request->input('fecha_final_8');
            $semana_final_9               = $request->input('fecha_final_9');
            $semana_final_10               = $request->input('fecha_final_10');
            $semana_final_11               = $request->input('fecha_final_11');
            $semana_final_12               = $request->input('fecha_final_12');
            $semana_final_13               = $request->input('fecha_final_13');
            $semana_final_14               = $request->input('fecha_final_14');
            $semana_final_15               = $request->input('fecha_final_15');

            $horas_1                   = $request->input('tiempo_1');
            $horas_2                  = $request->input('tiempo_2');
            $horas_3                  = $request->input('tiempo_3');
            $horas_4                  = $request->input('tiempo_4');
            $horas_5                  = $request->input('tiempo_5');
            $horas_6                  = $request->input('tiempo_6');
            $horas_7                  = $request->input('tiempo_7');
            $horas_8                  = $request->input('tiempo_8');
            $horas_9                  = $request->input('tiempo_9');
            $horas_10                  = $request->input('tiempo_10');
            $horas_11                  = $request->input('tiempo_11');
            $horas_12                  = $request->input('tiempo_12');
            $horas_13                  = $request->input('tiempo_13');
            $horas_14                  = $request->input('tiempo_14');
            $horas_15                  = $request->input('tiempo_15');

            $descripcion_competencias_1  = $request->input('descripcion_competencias_1');
            $descripcion_competencias_2  = $request->input('descripcion_competencias_2');
            $descripcion_competencias_3  = $request->input('descripcion_competencias_3');
            $descripcion_competencias_4  = $request->input('descripcion_competencias_4');
            $descripcion_competencias_5  = $request->input('descripcion_competencias_5');
            $descripcion_competencias_6  = $request->input('descripcion_competencias_6');
            $descripcion_competencias_7  = $request->input('descripcion_competencias_7');
            $descripcion_competencias_8  = $request->input('descripcion_competencias_8');
            $descripcion_competencias_9  = $request->input('descripcion_competencias_9');
            $descripcion_competencias_10  = $request->input('descripcion_competencias_10');
            $descripcion_competencias_11  = $request->input('descripcion_competencias_11');
            $descripcion_competencias_12  = $request->input('descripcion_competencias_12');
            $descripcion_competencias_13  = $request->input('descripcion_competencias_13');
            $descripcion_competencias_14  = $request->input('descripcion_competencias_14');
            $descripcion_competencias_15  = $request->input('descripcion_competencias_15');




            $actividades           = $request->input('actividades');
            $resultados            = $request->input('resultados');
            $evidencia             = $request->input('evidencia');
            $instrumentos          = $request->input('instrumentos');
            $asignaturas           = $request->input('asignaturas');
            $topicos               = $request->input('topicos');
            $estrategias           = $request->input('estrategias');

            //alumno
            $data1 = array(
                'grupo'     =>  $grupo,
                'id_proceso' =>  $procesos,
            );
            $response_a_d = alumno_def::requestInsertAlumnoD($data1);
            if (isset($response_a_d["code"]) && $response_a_d["code"] == 200) {
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
                        'message'   => $response_a_d['message'],
                        'code'      => $response_a_d['code']
                    ),
                );
            }

            //asesor empresarial
            $data2 = array(
                'puesto'     =>  $puesto,
            );
            $response_a_e_d = asesor_empresarial_def::requestInsertAsesor_EmpD($data2);
            if (isset($response_a_e_d["code"]) && $response_a_e_d["code"] == 200) {
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
                        'message'   => $response_a_e_d['message'],
                        'code'      => $response_a_e_d['code']
                    ),
                );
            }

            //proyecto
            $data3 = array(
                'objetivos_proyecto'     =>  $objetivos_pro,
            );
            $response_p_d = proyecto_def::requestInsertProyectoD($data3);
            if (isset($response_p_d["code"]) && $response_p_d["code"] == 200) {
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
                        'message'   => $response_p_d['message'],
                        'code'      => $response_p_d['code']
                    ),
                );
            }
            //detalles
                $data4 = array(
                    'actividades' => $actividades ,        
                    'resultados'  => $resultados,                    
                    'evidencia'   => $evidencia,          
                    'instrumentos'=> $instrumentos,        
                    'asignaturas' => $asignaturas,        
                    'topicos'     => $topicos,         
                    'estrategias' => $estrategias,
                );
                $response_d_d = detalle_def::requestInsertDetalle($data4);
                if (isset($response_d_d["code"]) && $response_d_d["code"] == 200) {
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
                            'message'   => $response_d_d['message'],
                            'code'      => $response_d_d['code']
                        ),
                    );
                }

           
            //formulario
            $data5 = array(
                'id_alumno'     =>  $response_a_d['id'],
                'id_asesor_emp' =>  $response_a_e_d['id'],
                'id_proyecto'   =>  $response_p_d['id'],
                'id_detalle' =>  $response_d_d['id'],

            );
            $response_f_d = formulario_def::requestInsertFormularioD($data5);
            if (isset($response_f_d["code"]) && $response_f_d["code"] == 200) {
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
                        'message'   => $response_f_d['message'],
                        'code'      => $response_f_d['code']
                    ),
                );
            }

            //respuesta
            $data6 = array(
                'id_usuario'     =>  Auth::user()->id,
                'id_formulario'  => $response_f_d['id']
            );
            $response_r_d = respuesta_def::requestInsertRespuesta_def($data6);
            if (isset($response_r_d["code"]) && $response_r_d["code"] == 200) {
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
                        'message'   => $response_r_d['message'],
                        'code'      => $response_r_d['code']
                    ),
                );
            }



         //etapas del proyecto
         $datosEtapas1 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_1,
            'semana_inicial'  => $semana_inicio_1,
            'semana_final'  => $semana_final_1,
            'horas'  =>         $horas_1,
            'descripcion_competencias'  => $descripcion_competencias_1,
            'numero'  =>         1,

        );
        $datosEtapas2 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_2,
            'semana_inicial'  => $semana_inicio_2,
            'semana_final'  => $semana_final_2,
            'horas'  =>         $horas_2,
            'descripcion_competencias'  => $descripcion_competencias_2,
            'numero'  =>         2,

        );
        $datosEtapas3 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_3,
            'semana_inicial'  => $semana_inicio_3,
            'semana_final'  => $semana_final_3,
            'horas'  =>         $horas_3,
            'descripcion_competencias'  => $descripcion_competencias_3,
            'numero'  =>         3,
        );
        
        $datosEtapas4 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_4,
            'semana_inicial'  => $semana_inicio_4,
            'semana_final'  => $semana_final_4,
            'horas'  =>         $horas_4,
            'descripcion_competencias'  => $descripcion_competencias_4,
            'numero'  =>         4,
        );
      
        $datosEtapas5 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_5,
            'semana_inicial'  => $semana_inicio_5,
            'semana_final'  => $semana_final_5,
            'horas'  =>         $horas_5,
            'descripcion_competencias'  => $descripcion_competencias_5,
            'numero'  =>         5,
        );
        $datosEtapas6 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_6,
            'semana_inicial'  => $semana_inicio_6,
            'semana_final'  => $semana_final_6,
            'horas'  =>         $horas_6,
            'descripcion_competencias'  => $descripcion_competencias_6,
            'numero'  =>         6,
        );
        $datosEtapas7 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_7,
            'semana_inicial'  => $semana_inicio_7,
            'semana_final'  => $semana_final_7,
            'horas'  =>         $horas_7,
            'descripcion_competencias'  => $descripcion_competencias_7,
            'numero'  =>         7,
        );
        $datosEtapas8 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_8,
            'semana_inicial'  => $semana_inicio_8,
            'semana_final'  => $semana_final_8,
            'horas'  =>         $horas_8,
            'descripcion_competencias'  => $descripcion_competencias_8,
            'numero'  =>         8,
        );
        $datosEtapas9 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_9,
            'semana_inicial'  => $semana_inicio_9,
            'semana_final'  => $semana_final_9,
            'horas'  =>         $horas_9,
            'descripcion_competencias'  => $descripcion_competencias_9,
            'numero'  =>         9,
        );
        $datosEtapas10 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_10,
            'semana_inicial'  => $semana_inicio_10,
            'semana_final'  => $semana_final_10,
            'horas'  =>         $horas_10,
            'descripcion_competencias'  => $descripcion_competencias_10,
            'numero'  =>         10,
        );
        $datosEtapas11 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_11,
            'semana_inicial'  => $semana_inicio_11,
            'semana_final'  => $semana_final_11,
            'horas'  =>         $horas_11,
            'descripcion_competencias'  => $descripcion_competencias_11,
            'numero'  =>         11,
        );
        $datosEtapas12 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_12,
            'semana_inicial'  => $semana_inicio_12,
            'semana_final'  => $semana_final_12,
            'horas'  =>         $horas_12,
            'descripcion_competencias'  => $descripcion_competencias_12,
            'numero'  =>         12,
        );
        $datosEtapas13 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_13,
            'semana_inicial'  => $semana_inicio_13,
            'semana_final'  => $semana_final_13,
            'horas'  =>         $horas_13,
            'descripcion_competencias'  => $descripcion_competencias_13,
            'numero'  =>         13,
        );
        $datosEtapas14 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_14,
            'semana_inicial'  => $semana_inicio_14,
            'semana_final'  => $semana_final_14,
            'horas'  =>         $horas_14,
            'descripcion_competencias'  => $descripcion_competencias_14,
            'numero'  =>         14,
        );
        $datosEtapas15 = array(
            'descripcion_etapas'     =>  $etapas_proyecto_15,
            'semana_inicial'  => $semana_inicio_15,
            'semana_final'  => $semana_final_15,
            'horas'  =>         $horas_15,
            'descripcion_competencias'  => $descripcion_competencias_15,
            'numero'  =>         15,
        );
        $response_e_p = etapas_del_proyecto::requestInsertEtapas($datosEtapas1,$datosEtapas2,$datosEtapas3,$datosEtapas4,$datosEtapas5,$datosEtapas6,$datosEtapas7,$datosEtapas8,$datosEtapas9,$datosEtapas10,$datosEtapas11,$datosEtapas12,$datosEtapas13,$datosEtapas14,$datosEtapas15);
        if (isset($response_e_p["code"]) && $response_e_p["code"] == 200) {
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
                    'message'   => $response_e_p['message'],
                    'code'      => $response_e_p['code']
                ),
            );
        }

        //respuesta_etapas
        $datosRespuesta_E1 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id1e']
        );
        $datosRespuesta_E2 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id2e']
        );
        $datosRespuesta_E3 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id3e']
        );
        $datosRespuesta_E4 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id4e']
        );
        $datosRespuesta_E5 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id5e']
        );
        $datosRespuesta_E6 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id6e']
        );
        $datosRespuesta_E7 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id7e']
        );
        $datosRespuesta_E8 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id8e']
        );
        $datosRespuesta_E9 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id9e']
        );
        $datosRespuesta_E10 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id10e']
        );
        $datosRespuesta_E11 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id11e']
        );
        $datosRespuesta_E12 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id12e']
        );
        $datosRespuesta_E13 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id13e']
        );
        $datosRespuesta_E14 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id14e']
        );
        $datosRespuesta_E15 = array(
            'id_usuario'     =>  Auth::user()->id,
            'id_etapa_proyecto'  => $response_e_p['id15e']
        );
        $response_r_e = respuesta_etapa::requestInsertRespuesta($datosRespuesta_E1,$datosRespuesta_E2,$datosRespuesta_E3,$datosRespuesta_E4,$datosRespuesta_E5,$datosRespuesta_E6,$datosRespuesta_E7,$datosRespuesta_E8,$datosRespuesta_E9,$datosRespuesta_E10,$datosRespuesta_E11,$datosRespuesta_E12,$datosRespuesta_E13,$datosRespuesta_E14,$datosRespuesta_E15);
        if (isset($response_r_e["code"]) && $response_r_e["code"] == 200) {
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
                    'message'   => $response_r_e['message'],
                    'code'      => $response_r_e['code']
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
        
        return redirect('estancia1/'.$procesos)->with('success','F04 AGREGADO');
    }

}
