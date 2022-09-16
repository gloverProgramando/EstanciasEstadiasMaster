<?php

namespace App\Http\Controllers;

use App\Models\carga_horaria;
use App\Models\carta_aceptacion;
use App\Models\carta_liberacion;
use App\Models\carta_presentacion;
use App\Models\carta_responsiva;
use App\Models\cedula_registro;
use App\Models\constancia_derecho;
use App\Models\definicion_proyecto;
use App\Models\carta_compromiso;
use App\Models\reporte_mensual;
use App\Models\documentos;
use App\Models\respuesta_doc;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Location;
class Estancia1Controller extends Controller
{
    //
    public function ver($proces){//*funcional
        $userID=Auth::user()->id; 
        $name=['Estancia I','Estancias II','Estadía','Estadías Nacionales','Servicio Social'];
        //!cambiar este numero si se quiere agregar un nuevo proceso y tambien agregar el nombre en $name
        if($proces>0 && $proces<=5){//comprueba si el numero es de algun proceso del 1...5
            $var=[$proces,$name[$proces-1]];//guarda el numero y nombre del proceso
        }else return redirect('inicio');
        $users = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->join('empresa', 'formulario.id_empresa', '=', 'empresa.id')
        ->join('asesor_empresarial', 'formulario.id_asesor_emp', '=', 'asesor_empresarial.id')
        ->join('asesor_academico', 'formulario.id_asesor_aca', '=', 'asesor_academico.id')
        ->join('proyecto', 'formulario.id_proyecto', '=', 'proyecto.id')
        ->join('carreras', 'carreras.id_carrera', '=', 'alumno.id_carrera')
        ->select('formulario.id_alumno','formulario.id_empresa','formulario.id_asesor_emp','formulario.id_asesor_aca','formulario.id_proyecto','formulario.id','respuesta.id_usuario','carreras.nombre_carrera','users.name','alumno.ape_paterno','alumno.ape_materno','alumno.nombres','alumno.tel','alumno.matricula','alumno.email_per','alumno.email','alumno.no_ss','alumno.direccion','alumno.id_carrera','empresa.nombre_emp','empresa.giro','empresa.id_tipo','empresa.direccion_emp','empresa.ape_paterno_rh','empresa.ape_materno_rh','empresa.nombres_rh','empresa.tel_lada','empresa.tel_num','empresa.tel_ext','empresa.email_emp','asesor_empresarial.ape_paterno_ae','asesor_empresarial.ape_materno_ae','asesor_empresarial.nombres_ae','asesor_empresarial.id_cargo_ae','asesor_empresarial.tel_lada_ae','asesor_empresarial.tel_num_ae','asesor_empresarial.email_ae','asesor_academico.ape_paterno_aa','asesor_academico.ape_materno_aa','asesor_academico.nombres_aa','asesor_academico.id_cargo_aa','asesor_academico.tel_lada_aa','asesor_academico.tel_num_aa','asesor_academico.email_aa','proyecto.nombre_proyecto')
        ->where('users.id',$userID)
        ->where('alumno.id_procesos',$proces)
        ->get();

        $datosCedulaFormulario = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('users.id',$userID)
        ->where('alumno.id_procesos',$proces)
        ->get();

        $u   = ['user' => $users];
        $datosCF   = ['datosCedula' => $datosCedulaFormulario];

        $datos = Arr::collapse([$u,$datosCF]);

        $definicionProyecto = DB::table('users')
        ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
        ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
        ->join('alumno_def', 'formulario_def.id_alumno', '=', 'alumno_def.id')
        ->join('asesor_empresarial_def', 'formulario_def.id_asesor_emp', '=', 'asesor_empresarial_def.id')
        ->join('proyecto_def', 'formulario_def.id_proyecto', '=', 'proyecto_def.id')
        ->join('detalle_def','formulario_def.id_detalle','=','detalle_def.id')
        ->where('users.id',$userID)
        ->where('alumno_def.id_proceso',$proces)
        ->get();
        $datosDefinicionProyecto = DB::table('users')
        ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
        ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
        ->join('alumno_def', 'formulario_def.id_alumno', '=', 'alumno_def.id')
        ->where('users.id',$userID)
        ->where('alumno_def.id_proceso',$proces)
        ->get();

        $defP  = ['def' => $definicionProyecto];
        $datosDp  = ['datosDef' => $datosDefinicionProyecto];

        $datos1 = Arr::collapse([$defP,$datosDp]);
        
        $documentos=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('cedula_registro','cedula_registro.id','=','documentos.id_c_registro')
        ->select('documentos.id_c_registro as id','cedula_registro.nombre_c_r','cedula_registro.estado_c_r','cedula_registro.observaciones_c_r','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        $docs  = ['documentos' => $documentos];
        $cedula_docs  = ['cedula_registro' => $cedula_doc];
        $datos2 = Arr::collapse([$docs,$cedula_docs]);
        //datos f04 doc
        $definicion_Proyecto_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('definicion_proyecto','definicion_proyecto.id','=','documentos.id_d_proyecto')
        ->select('documentos.id_d_proyecto as id','definicion_proyecto.nombre_d_p','definicion_proyecto.estado_d_p','definicion_proyecto.observaciones_d_p','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        //etapas de proyecto
        $etapas=DB::table('users')
        ->join('respuesta_etapa','users.id','=','respuesta_etapa.id_usuario')
        ->join('etapas_del_proyecto','etapas_del_proyecto.id','=','respuesta_etapa.id_etapa_proyecto')
        ->where('users.id',$userID)
        ->get();
        $etapas  = ['etapas' => $etapas];
        $defini  = ['definicion_proyecto' => $definicion_Proyecto_doc];
        $datos3 = Arr::collapse([$etapas,$defini]);

        //datos f02 doc
        $carta_aceptacion=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_aceptacion','carta_aceptacion.id','=','documentos.id_c_aceptacion')
        ->select('documentos.id_c_aceptacion as id','carta_aceptacion.nombre','carta_aceptacion.estado','carta_aceptacion.observaciones','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        //datos f05 doc
        $carta_liberacion =DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_liberacion','carta_liberacion.id','=','documentos.id_c_liberacion')
        ->select('documentos.id_c_liberacion as id','carta_liberacion.nombre_c_l','carta_liberacion.estado_c_l','carta_liberacion.observaciones_c_l','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        $carta_ace  = ['carta_aceptacion' => $carta_aceptacion];
        $carta_lib = ['carta_liberacion' => $carta_liberacion];
        $datos4 = Arr::collapse([$carta_ace,$carta_lib]);

        //datos f01 doc
        $carta_presentacion =DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_presentacion','carta_presentacion.id','=','documentos.id_c_presentacion')
        ->select('documentos.id_c_presentacion as id','carta_presentacion.nombre_c_p','carta_presentacion.estado_c_p','carta_presentacion.observaciones_c_p','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        //carga horaria doc
        $carga_horaria=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carga_horaria','carga_horaria.id','=','documentos.id_c_horaria')
        ->select('documentos.id_c_horaria as id','carga_horaria.nombre_c_h','carga_horaria.estado_c_h','carga_horaria.observaciones_c_h','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        $carta_p = ['carta_presentacion' => $carta_presentacion];
        $carga_h = ['carga_horaria' => $carga_horaria];
        $datos5 = Arr::collapse([$carta_p,$carga_h]);

        //constancia_derecho doc
        $constancia_derecho =DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('constancia_derecho','constancia_derecho.id','=','documentos.id_c_derecho')
        ->select('documentos.id_c_derecho as id','constancia_derecho.nombre_c_d','constancia_derecho.estado_c_d','constancia_derecho.observaciones_c_d','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        //carta_responsiva doc
        $carta_responsiva=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_responsiva','carta_responsiva.id','=','documentos.id_c_responsiva')
        ->select('documentos.id_c_responsiva as id','carta_responsiva.nombre_c_r','carta_responsiva.estado_c_r','carta_responsiva.observaciones_c_r','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        $constancia_d = ['constancia_derecho' => $constancia_derecho];
        $carta_r = ['carta_responsiva' => $carta_responsiva];
        $datos6 = Arr::collapse([$constancia_d,$carta_r]);

        //datos f01 doc
        $carta_compromiso =DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_compromiso','carta_compromiso.id','=','documentos.id_c_compromiso')
        ->select('documentos.id_c_compromiso as id','carta_compromiso.nombre_c_c','carta_compromiso.estado_c_c','carta_compromiso.observaciones_c_c','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
    
        //datos f01 doc
        $reporte_mensual =DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('reporte_mensual','reporte_mensual.id','=','documentos.id_r_mensual')
        ->select('documentos.id_r_mensual as id','reporte_mensual.nombre_r_m','reporte_mensual.estado_r_m','reporte_mensual.observaciones_r_m','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso',$proces) //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        $carta_co =['carta_compromiso'=> $carta_compromiso];
        $reporte_m =['reporte_mensual'=> $reporte_mensual];
        $datos14 = Arr::collapse([$carta_co,$reporte_m]);

        return view('estancia1',['datos'=>$datos,'definicionP'=>$datos1,
        'documentos'=>$datos2,'etapas'=>$datos3,'carta_aceptacion'=>$datos4,
        'carta'=>$datos5,'carta1'=>$datos6,'proceso'=>$var,'documentos2'=>$datos14]);
    }
    //subir documento sin datos carga horaria
    public function subir_carga_horaria_estancia1(Request $request, $name,$proces,$idDoc){//*funcional
    //!al subir el primer documento se crea el registro de la tabla documeentos
        $Ndoc=['carga_horaria','constancia_derecho','carta_responsiva','f01','f02','f03','f04','f05','carta_compromiso','reporte_mensual'];
        $request->validate([
            $Ndoc[$idDoc-1]=> "required|mimetypes:application/pdf|max:30000"
        ]);
        $arrayResult = array();
        
        $Ncol=[];
        try{
            if($request->hasFile($Ndoc[$idDoc-1])){
                $archivo=$request->file($Ndoc[$idDoc-1]);
                //$nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$Ndoc[$idDoc-1].$proces.'.pdf';//!ej. 202000052Carga_horaria1
                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            switch ($idDoc) {
                case '1':
                    $data5 = array('nombre_c_h'   => $nombreAF,'estado_c_h'=> 1);
                    $response = carga_horaria::requestInsertcargaH($data5);
                    break;
                case '2':
                    $data5 = array('nombre_c_d'   => $nombreAF,'estado_c_d'=> 1);
                    $response = constancia_derecho::requestInsertconstanciaD($data5);
                    break;
                case '3':
                    $data5 = array('nombre_c_r'   => $nombreAF,'estado_c_r'=> 1);
                    $response = carta_responsiva::requestInsertcartaR($data5);
                    break;
                case '4':
                    $data5 = array('nombre_c_p'   => $nombreAF,'estado_c_p'=> 1);
                    $response = carta_presentacion::requestInsertcartaP($data5);
                    break;
                case '5':
                    $data5 = array('nombre'   => $nombreAF,'estado'=> 1);
                    $response = carta_aceptacion::requestInsertcartaA($data5);
                    break;
                case '6':
                    $data5 = array('nombre_c_r'   => $nombreAF,'estado_c_r'=> 1);
                    $response = cedula_registro::requestInsertCedulaR($data5);
                    break;
                case '7':
                    $data5 = array('nombre_d_p'   => $nombreAF,'estado_d_p'=> 1);
                    $response = definicion_proyecto::requestInsertDefinicionP($data5);
                    break;
                case '8':
                    $data5 = array('nombre_c_l'   => $nombreAF,'estado_c_l'=> 1);
                    $response = carta_liberacion::requestInsertcartaL($data5);
                    break;
                case '9':
                    $data5 = array('nombre_c_c' => $nombreAF,'estado_c_c'=> 1);
                    $response = carta_compromiso::requestInsertcargaC($data5);
                    break;
                case '10':
                    $data5 = array('nombre_r_m' => $nombreAF,'estado_r_p'=> 1);
                    $response = reporte_mensual::requestInsertcartarp($data5);
                    break;    
                default:
                    # code...
                break;
            }

            if (isset($response["code"]) && $response["code"] == 200) {
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
                        'message'   => $response['message'],
                        'code'      => $response['code']
                    ),
                );
            }
            $NcolBD=['id_c_horaria','id_c_derecho','id_c_responsiva','id_c_presentacion',
            'id_c_aceptacion','id_c_registro','id_d_proyecto','id_c_liberacion','id_c_compromiso','id_r_mensual'];
        
            //controlador de estatus
            if ($date='01' | $date='02' | $date='03' | $date='04' ){
                    $estatus3 = 'enero-abril';
            } elseif ( $date='05' | $date='06' | $date='07' | $date='08' ) {
                    $estatus3 = 'mayo-abril';
            } elseif ($date='09' | $date='10' | $date='11' | $date='12'){
                    $estatus3 = 'septiembre-diciembre';
            }
            $data6 = array(
                $NcolBD[$idDoc-1]     =>  $response['id'],
                'id_proceso'             =>  $proces,//!Es donde pasa el # de proceso y periodo de clase
                'estatus'          =>  $estatus3
            );
            $response_documentos = documentos::requestInsertDoc($data6);//!aqui se crea el registro de documentos

            if (isset($response_documentos["code"]) && $response_documentos["code"] == 200) {
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
                        'message'   => $response_documentos['message'],
                        'code'      => $response_documentos['code']
                    ),
                );
            }

            $data7 = array(
                'id_usuario'    => Auth::user()->id,
                'id_documentos' => $response_documentos['id']
            );
            //!Crear el registro de respuests_doc
            $response_respuesta = respuesta_doc::requestInsertRespuesta($data7);
            
    
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
        $msj= json_encode($arrayResult);
        if($msj=='{"Response":{"ok":true,"message":"Se ha guardado el registro","code":"200"}}'){
            return redirect('estancia1/'.$proces)->with('success','Documento agregado');
        }else
        {
            return redirect('estancia1/'.$proces)->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }

    //actualizar documento carga horaria
    public function actualizar_carga_horaria_estancia1(Request $request, $name,$proces,$idDoc){//*funcional
        //!Al subir un documento se actualiza el registro de la tabla documentos
        $Ndoc=['carga_horaria','constancia_derecho','carta_responsiva','f01','f02','f03','f04','f05','carta_compromiso','reporte_mensual'];
        $request->validate([
            $Ndoc[$idDoc-1]=> "required|mimetypes:application/pdf|max:30000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile($Ndoc[$idDoc-1])){
                $archivo=$request->file($Ndoc[$idDoc-1]);
                $nombreAF=$name.$Ndoc[$idDoc-1].$proces.'.pdf';//!ej. 202000052Carga_horaria1
                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            switch ($idDoc) {
                case '1':
                    $data5 = array('nombre_c_h'   => $nombreAF,'estado_c_h'=> 1);
                    $response = carga_horaria::requestInsertcargaH($data5);
                    break;
                case '2':
                    $data5 = array('nombre_c_d'   => $nombreAF,'estado_c_d'=> 1);
                    $response = constancia_derecho::requestInsertconstanciaD($data5);
                    break;
                case '3':
                    $data5 = array('nombre_c_r'   => $nombreAF,'estado_c_r'=> 1);
                    $response = carta_responsiva::requestInsertcartaR($data5);
                    break;
                case '4':
                    $data5 = array('nombre_c_p'   => $nombreAF,'estado_c_p'=> 1);
                    $response = carta_presentacion::requestInsertcartaP($data5);
                    break;
                case '5':
                    $data5 = array('nombre'   => $nombreAF,'estado'=> 1);
                    $response = carta_aceptacion::requestInsertcartaA($data5);
                    break;
                case '6':
                    $data5 = array('nombre_c_r'   => $nombreAF,'estado_c_r'=> 1);
                    $response = cedula_registro::requestInsertCedulaR($data5);
                    break;
                case '7':
                    $data5 = array('nombre_d_p'   => $nombreAF,'estado_d_p'=> 1);
                    $response = definicion_proyecto::requestInsertDefinicionP($data5);
                    break;
                case '8':
                    $data5 = array('nombre_c_l'   => $nombreAF,'estado_c_l'=> 1);
                    $response = carta_liberacion::requestInsertcartaL($data5);
                    break;
                case '9':
                    $data5 = array('nombre_c_c'   =>$nombreAF,'estado_c_c'=> 1);
                    $response = carta_compromiso::requestInsertcargaC($data5);
                    break;
                case '10':
                    $data5 = array('nombre_r_m'   =>$nombreAF,'estado_r_m' =>1);
                    $response = reporte_mensual::requestInsertcargarp($data5);
                    break;   
                default:
                    # code...
                break;
            }

            if (isset($response["code"]) && $response["code"] == 200) {
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
                        'message'   => $response['message'],
                        'code'      => $response['code']
                    ),
                );
            }
            //$NcolBD=['id_c_horaria','id_c_derecho','id_c_responsiva','id_c_presentacion',
            //'id_c_aceptacion','id_c_registro','id_d_proyecto','id_c_liberacion'];
            $carta=documentos::find($request->get('id_docs'));
            switch ($idDoc) {
                case 1:$carta->id_c_horaria=$response['id'];
                    break;
                case 2:$carta->id_c_derecho=$response['id'];
                    break;
                case 3:$carta->id_c_responsiva=$response['id'];
                    break;
                case 4:$carta->id_c_presentacion=$response['id'];
                    break;
                case 5:$carta->id_c_aceptacion=$response['id'];
                    break;
                case 6:$carta->id_c_registro=$response['id'];
                    break;
                case 7:$carta->id_d_proyecto=$response['id'];
                    break;
                case 8:$carta->id_c_liberacion=$response['id'];
                    break;
                case 9:$carta->id_c_compromiso=$response['id'];
                    break;
                case 10:$carta->id_r_mensual=$response['id'];
                    break;
                default:
                    # code...
                    break;
            }
            //$carta->id_proceso=1;
            $carta->save();
            

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
        $msj= json_encode($arrayResult);
        if($msj=='{"Response":{"ok":true,"message":"Se ha guardado el registro","code":"200"}}'){
            return redirect('estancia1/'.$proces)->with('success','Documento agregado');
        }else
        {
            return redirect('estancia1/'.$proces)->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    //ver observaciones del documento
    public function verObservaciones1_carga_horaria($proces,$idDoc,$id){//*funcional
        $Ntab=['carga_horaria','constancia_derecho','carta_responsiva','carta_presentacion','carta_aceptacion',
        'cedula_registro','definicion_proyecto','carta_liberacion','carta_compromiso','reporte_mensual'];
        $Ncol=['observaciones_c_h','observaciones_c_d','observaciones_c_r','observaciones_c_p','observaciones',
        'observaciones_c_r','observaciones_d_p','observaciones_c_l','observaciones_c_c','observaciones_r_m'];
        $observ=DB::table($Ntab[$idDoc-1])
        ->select($Ncol[$idDoc-1].' as observacion')
        ->where('id',$id)
        ->get();
        //dd($observ);
        return view('usuario.observaciones_carga_horaria',['datos'=>$observ,'proceso'=>$proces]);
    }
}
