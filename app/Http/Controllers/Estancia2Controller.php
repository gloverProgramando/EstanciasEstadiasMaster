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
use App\Models\documentos;
use App\Models\respuesta_doc;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Location;
class Estancia2Controller extends Controller
{
    //
    public function ver(){

        $userID=Auth::user()->id; 
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
        ->where('alumno.id_procesos',2)
        ->get();

        $datosCedulaFormulario = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('users.id',$userID)
        ->where('alumno.id_procesos',2)
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
        ->where('alumno_def.id_proceso',2)
        ->get();
        $datosDefinicionProyecto = DB::table('users')
        ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
        ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
        ->join('alumno_def', 'formulario_def.id_alumno', '=', 'alumno_def.id')
        ->where('users.id',$userID)
        ->where('alumno_def.id_proceso',2)
        ->get();

        $defP  = ['def' => $definicionProyecto];
        $datosDp  = ['datosDef' => $datosDefinicionProyecto];

        $datos1 = Arr::collapse([$defP,$datosDp]);
        
        $documentos=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('cedula_registro','cedula_registro.id','=','documentos.id_c_registro')
        ->select('documentos.id_c_registro','cedula_registro.nombre_c_r','cedula_registro.estado_c_r','cedula_registro.observaciones_c_r','documentos.id','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        $docs  = ['documentos' => $documentos];
        $cedula_docs  = ['cedula_registro' => $cedula_doc];
        $datos2 = Arr::collapse([$docs,$cedula_docs]);
        //datos f04 doc
        $definicion_Proyecto_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('definicion_proyecto','definicion_proyecto.id','=','documentos.id_d_proyecto')
        ->select('documentos.id_d_proyecto','definicion_proyecto.nombre_d_p','definicion_proyecto.estado_d_p','definicion_proyecto.observaciones_d_p','documentos.id','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
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
        ->select('documentos.id_c_aceptacion','carta_aceptacion.nombre','carta_aceptacion.estado','carta_aceptacion.observaciones','documentos.id','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        //datos f05 doc
        $carta_liberacion =DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_liberacion','carta_liberacion.id','=','documentos.id_c_liberacion')
        ->select('documentos.id_c_liberacion','carta_liberacion.nombre_c_l','carta_liberacion.estado_c_l','carta_liberacion.observaciones_c_l','documentos.id','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        $carta_ace  = ['carta_aceptacion' => $carta_aceptacion];
        $carta_lib = ['carta_liberacion' => $carta_liberacion];
        $datos4 = Arr::collapse([$carta_ace,$carta_lib]);

        //datos f01 doc
        $carta_presentacion =DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_presentacion','carta_presentacion.id','=','documentos.id_c_presentacion')
        ->select('documentos.id_c_presentacion','carta_presentacion.nombre_c_p','carta_presentacion.estado_c_p','carta_presentacion.observaciones_c_p','documentos.id','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        //carga horaria doc
        $carga_horaria=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carga_horaria','carga_horaria.id','=','documentos.id_c_horaria')
        ->select('documentos.id_c_horaria','carga_horaria.nombre_c_h','carga_horaria.estado_c_h','carga_horaria.observaciones_c_h','documentos.id','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        $carta_p = ['carta_presentacion' => $carta_presentacion];
        $carga_h = ['carga_horaria' => $carga_horaria];
        $datos5 = Arr::collapse([$carta_p,$carga_h]);

        //constancia_derecho doc
        $constancia_derecho =DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('constancia_derecho','constancia_derecho.id','=','documentos.id_c_derecho')
        ->select('documentos.id_c_derecho','constancia_derecho.nombre_c_d','constancia_derecho.estado_c_d','constancia_derecho.observaciones_c_d','documentos.id','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();

        //carta_responsiva doc
        $carta_responsiva=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_responsiva','carta_responsiva.id','=','documentos.id_c_responsiva')
        ->select('documentos.id_c_responsiva','carta_responsiva.nombre_c_r','carta_responsiva.estado_c_r','carta_responsiva.observaciones_c_r','documentos.id','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2') //cambio 1 para arreglar error de duplicacion de datos en estancia y estadia
        ->get();
        $constancia_d = ['constancia_derecho' => $constancia_derecho];
        $carta_r = ['carta_responsiva' => $carta_responsiva];
        $datos6 = Arr::collapse([$constancia_d,$carta_r]);

        return view('estancia2',['datos'=>$datos,'definicionP'=>$datos1,'documentos'=>$datos2,'etapas'=>$datos3,'carta_aceptacion'=>$datos4,'carta'=>$datos5,'carta1'=>$datos6]);
    }
     //subir documento sin datos carga horaria
     public function subir_carga_horaria_estancia2(Request $request, $name,$nombre){
    
        $request->validate([
            "carga_horaria" => "required|mimetypes:application/pdf|max:30000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('carga_horaria')){
                $archivo=$request->file('carga_horaria');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_h'   => $nombreAF,
                'estado_c_h'=> 1
            );
        
            $response_c_horaria = carga_horaria::requestInsertcargaH($data5);
            if (isset($response_c_horaria["code"]) && $response_c_horaria["code"] == 200) {
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
                        'message'   => $response_c_horaria['message'],
                        'code'      => $response_c_horaria['code']
                    ),
                );
            }

                        //controlador de estatus
             if ($date='01' | $date='02' | $date='03' | $date='04' ){
                            $estatus3 = 'enero-abril';
            } elseif ( $date='05' | $date='06' | $date='07' | $date='08' ) {
                            $estatus3 = 'mayo-abril';
            } elseif ($date='09' | $date='10' | $date='11' | $date='12'){
                            $estatus3 = 'septiembre-diciembre';
            }

            $data6 = array(
                'id_c_horaria'     =>  $response_c_horaria['id'],
                'id_proceso'             =>  2,
                'estatus'          =>  $estatus3
            );
            $response_documentos = documentos::requestInsertDoc($data6);
        
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }

    //actualizar documento carga horaria
    public function actualizar_carga_horaria_estancia2(Request $request, $name,$nombre){
        
        $request->validate([
            "carga_horaria" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('carga_horaria')){
                $archivo=$request->file('carga_horaria');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_h'   => $nombreAF,
                'estado_c_h'=> 1
            );
        
            $response_c_horaria = carga_horaria::requestInsertcargaH($data5);
            if (isset($response_c_horaria["code"]) && $response_c_horaria["code"] == 200) {
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
                        'message'   => $response_c_horaria['message'],
                        'code'      => $response_c_horaria['code']
                    ),
                );
            }
            $carta=documentos::find($request->get('id_doc_carga_horaria'));
            $carta->id_c_horaria=$response_c_horaria['id'];
            $carta->id_proceso=2;
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    public function verObservaciones2_carga_horaria(){
        $userID=Auth::user()->id; 
        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carga_horaria','carga_horaria.id','=','documentos.id_c_horaria')
        ->select('documentos.id_c_horaria','carga_horaria.nombre_c_h','carga_horaria.estado_c_h','carga_horaria.observaciones_c_h','respuesta_doc.id_documentos','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2')
        ->get();
        return view('usuario.observaciones_carga_horaria',['datos'=>$cedula_doc]);
    }

    //subir documento sin datos constancia derecho
    public function subir_constancia_derecho_estancia2(Request $request, $name,$nombre){
    
        $request->validate([
            "constancia_derecho" => "required|mimetypes:application/pdf|max:30000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('constancia_derecho')){
                $archivo=$request->file('constancia_derecho');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_d'   => $nombreAF,
                'estado_c_d'=> 1
            );
        
            $response_c_derecho = constancia_derecho::requestInsertconstanciaD($data5);
            if (isset($response_c_derecho["code"]) && $response_c_derecho["code"] == 200) {
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
                        'message'   => $response_c_derecho['message'],
                        'code'      => $response_c_derecho['code']
                    ),
                );
            }
            $data6 = array(
                'id_c_horaria'     =>  $response_c_derecho['id'],
                'id_proceso'             =>  2
            );
            $response_documentos = documentos::requestInsertDoc($data6);
        
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }    }

    //actualizar documento constancia derecho
    public function actualizar_constancia_derecho_estancia2(Request $request, $name,$nombre){
        
        $request->validate([
            "constancia_derecho" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('constancia_derecho')){
                $archivo=$request->file('constancia_derecho');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_d'   => $nombreAF,
                'estado_c_d'=> 1
            );
        
            $response_c_derecho = constancia_derecho::requestInsertconstanciaD($data5);
            if (isset($response_c_derecho["code"]) && $response_c_derecho["code"] == 200) {
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
                        'message'   => $response_c_derecho['message'],
                        'code'      => $response_c_derecho['code']
                    ),
                );
            }
            $carta=documentos::find($request->get('id_doc_constancia_derecho'));
            $carta->id_c_derecho=$response_c_derecho['id'];
            $carta->id_proceso=2;
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    public function verObservaciones2_constancia_derecho(){
        $userID=Auth::user()->id; 
        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('constancia_derecho','constancia_derecho.id','=','documentos.id_c_derecho')
        ->select('documentos.id_c_derecho','constancia_derecho.nombre_c_d','constancia_derecho.estado_c_d','constancia_derecho.observaciones_c_d','respuesta_doc.id_documentos','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2')
        ->get();
        return view('usuario.observaciones_constancia_derecho',['datos'=>$cedula_doc]);
    }

    //subir documento sin datos carta responsiva
    public function subir_carta_responsiva_estancia2(Request $request, $name,$nombre){
    
        $request->validate([
            "carta_responsiva" => "required|mimetypes:application/pdf|max:30000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('carta_responsiva')){
                $archivo=$request->file('carta_responsiva');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_r'   => $nombreAF,
                'estado_c_r'=> 1
            );
        
            $response_c_responsiva = carta_responsiva::requestInsertcartaR($data5);
            if (isset($response_c_responsiva["code"]) && $response_c_responsiva["code"] == 200) {
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
                        'message'   => $response_c_responsiva['message'],
                        'code'      => $response_c_responsiva['code']
                    ),
                );
            }
            $data6 = array(
                'id_c_responsiva'     =>  $response_c_responsiva['id'],
                'id_proceso'             =>  2
            );
            $response_documentos = documentos::requestInsertDoc($data6);
        
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }

    //actualizar documento carta responsiva
    public function actualizar_carta_responsiva_estancia2(Request $request, $name,$nombre){
        
        $request->validate([
            "carta_responsiva" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('carta_responsiva')){
                $archivo=$request->file('carta_responsiva');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_r'   => $nombreAF,
                'estado_c_r'=> 1
            );
        
            $response_c_responsiva = carta_responsiva::requestInsertcartaR($data5);
            if (isset($response_c_responsiva["code"]) && $response_c_responsiva["code"] == 200) {
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
                        'message'   => $response_c_responsiva['message'],
                        'code'      => $response_c_responsiva['code']
                    ),
                );
            }
            $carta=documentos::find($request->get('id_doc_carta_responsiva'));
            $carta->id_c_responsiva=$response_c_responsiva['id'];
            $carta->id_proceso=2;
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }

    }
    public function verObservaciones2_carta_responsiva(){
        $userID=Auth::user()->id; 
        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_responsiva','carta_responsiva.id','=','documentos.id_c_responsiva')
        ->select('documentos.id_c_responsiva','carta_responsiva.nombre_c_r','carta_responsiva.estado_c_r','carta_responsiva.observaciones_c_r','respuesta_doc.id_documentos','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2')
        ->get();
        return view('usuario.observaciones_carta_responsiva',['datos'=>$cedula_doc]);
    }
    //subir documento sin datos f01
    public function subirF01_estancia2(Request $request, $name,$nombre){
        $request->validate([
            "f01" => "required|mimetypes:application/pdf|max:30000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f01')){
                $archivo=$request->file('f01');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_p'   => $nombreAF,
                'estado_c_p'=> 1
            );
        
            $response_c_presentacion = carta_presentacion::requestInsertcartaP($data5);
            if (isset($response_c_presentacion["code"]) && $response_c_presentacion["code"] == 200) {
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
                        'message'   => $response_c_presentacion['message'],
                        'code'      => $response_c_presentacion['code']
                    ),
                );
            }
            $data6 = array(
                'id_c_presentacion'     =>  $response_c_presentacion['id'],
                'id_proceso'             =>  2
            );
            $response_documentos = documentos::requestInsertDoc($data6);
        
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    //actualizar documento f02
    public function actualizarF01_estancia2(Request $request, $name,$nombre){
        
        $request->validate([
            "f01" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f01')){
                $archivo=$request->file('f01');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_p'   => $nombreAF,
                'estado_c_p'=> 1
            );
        
            $response_c_presentacion = carta_presentacion::requestInsertcartaP($data5);
            if (isset($response_c_presentacion["code"]) && $response_c_presentacion["code"] == 200) {
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
                        'message'   => $response_c_presentacion['message'],
                        'code'      => $response_c_presentacion['code']
                    ),
                );
            }
            $carta=documentos::find($request->get('id_docf01'));
            $carta->id_c_presentacion=$response_c_presentacion['id'];
            $carta->id_proceso=2;
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    public function verObservaciones2_f01(){
        $userID=Auth::user()->id; 
        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_presentacion','carta_presentacion.id','=','documentos.id_c_presentacion')
        ->select('documentos.id_c_presentacion','carta_presentacion.nombre_c_p','carta_presentacion.estado_c_p','carta_presentacion.observaciones_c_p','respuesta_doc.id_documentos','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2')
        ->get();
        return view('usuario.observaciones_f01',['datos'=>$cedula_doc]);
    }

   //subir documento sin datos f02
    public function subirF02_estancia2(Request $request, $name,$nombre){
        $request->validate([
            "f02" => "required|mimetypes:application/pdf|max:30000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f02')){
                $archivo=$request->file('f02');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre'   => $nombreAF,
                'estado'=> 1
            );
        
            $response_c_aceptacion = carta_aceptacion::requestInsertcartaA($data5);
            if (isset($response_c_aceptacion["code"]) && $response_c_aceptacion["code"] == 200) {
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
                        'message'   => $response_c_aceptacion['message'],
                        'code'      => $response_c_aceptacion['code']
                    ),
                );
            }
            $data6 = array(
                'id_c_aceptacion'     =>  $response_c_aceptacion['id'],
                'id_proceso'             =>  2
            );
            $response_documentos = documentos::requestInsertDoc($data6);
        
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    //actualizar documento f02
    public function actualizarF02_estancia2(Request $request, $name,$nombre){
        
        $request->validate([
            "f02" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f02')){
                $archivo=$request->file('f02');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre'   => $nombreAF,
                'estado'=> 1
            );
        
            $response_carta_aceptacion = carta_aceptacion::requestInsertcartaA($data5);
            if (isset($response_carta_aceptacion["code"]) && $response_carta_aceptacion["code"] == 200) {
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
                        'message'   => $response_carta_aceptacion['message'],
                        'code'      => $response_carta_aceptacion['code']
                    ),
                );
            }
            $carta=documentos::find($request->get('id_docf02'));
            $carta->id_c_aceptacion=$response_carta_aceptacion['id'];
            $carta->id_proceso=2;
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }

    }
    public function verObservaciones2_f02(){
        $userID=Auth::user()->id; 
        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_aceptacion','carta_aceptacion.id','=','documentos.id_c_aceptacion')
        ->select('documentos.id_c_aceptacion','carta_aceptacion.nombre','carta_aceptacion.estado','carta_aceptacion.observaciones','respuesta_doc.id_documentos','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2')
        ->get();
        return view('usuario.observaciones_f02',['datos'=>$cedula_doc]);
    }

    //subir documento sin datos f03
    public function subirF03_estancia2(Request $request, $name,$nombre){
    
        $request->validate([
            "f03" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f03')){
                $archivo=$request->file('f03');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_r'   => $nombreAF,
                'estado_c_r'=> 1
                //'ID_Alumno'         => $response_alumno['id']
            );
        
            $response_c_registro = cedula_registro::requestInsertCedulaR($data5);
            if (isset($response_c_registro["code"]) && $response_c_registro["code"] == 200) {
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
                        'message'   => $response_c_registro['message'],
                        'code'      => $response_c_registro['code']
                    ),
                );
            }
            $data6 = array(
                'id_c_registro'     =>  $response_c_registro['id'],
                'id_proceso'             =>  2
            );
            $response_documentos = documentos::requestInsertDoc($data6);
        
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    //actualizar documento f03
    public function actualizarF03_estancia2(Request $request, $name,$nombre){
    
        $request->validate([
            "f03" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f03')){
                $archivo=$request->file('f03');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_r'   => $nombreAF,
                'estado_c_r'=> 1
            );
        
            $response_cedula_registro = cedula_registro::requestInsertCedulaR($data5);
            if (isset($response_cedula_registro["code"]) && $response_cedula_registro["code"] == 200) {
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
                        'message'   => $response_cedula_registro['message'],
                        'code'      => $response_cedula_registro['code']
                    ),
                );
            }
            $carta=documentos::find($request->get('id_docf03'));
            $carta->id_c_registro=$response_cedula_registro['id'];
            $carta->id_proceso=2;
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }

    }
    public function verObservaciones2_f03(){
        $userID=Auth::user()->id; 
        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('cedula_registro','cedula_registro.id','=','documentos.id_c_registro')
        ->select('documentos.id_c_registro','cedula_registro.nombre_c_r','cedula_registro.estado_c_r','cedula_registro.observaciones_c_r','respuesta_doc.id_documentos','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2')
        ->get();
        return view('usuario.observaciones_f03',['datos'=>$cedula_doc]);
    }

    //subir documento sin datos f04
    public function subirF04_estancia2(Request $request, $name,$nombre){
    
        $request->validate([
            "f04" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f04')){
                $archivo=$request->file('f04');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_d_p'   => $nombreAF,
                'estado_d_p'=> 1
                //'ID_Alumno'         => $response_alumno['id']
            );
        
            $response_d_proyecto = definicion_proyecto::requestInsertDefinicionP($data5);
            if (isset($response_d_proyecto["code"]) && $response_d_proyecto["code"] == 200) {
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
                        'message'   => $response_d_proyecto['message'],
                        'code'      => $response_d_proyecto['code']
                    ),
                );
            }
            $data6 = array(
                'id_c_registro'     =>  $response_d_proyecto['id'],
                'id_proceso'             =>  2
            );
            $response_documentos = documentos::requestInsertDoc($data6);
        
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    //actualizar documento f04
    public function actualizarF04_estancia2(Request $request, $name,$nombre){
        
        $request->validate([
            "f04" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f04')){
                $archivo=$request->file('f04');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_d_p'   => $nombreAF,
                'estado_d_p'=> 1
            );
        
            $response_d_proyecto = definicion_proyecto::requestInsertDefinicionP($data5);
            if (isset($response_d_proyecto["code"]) && $response_d_proyecto["code"] == 200) {
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
                        'message'   => $response_d_proyecto['message'],
                        'code'      => $response_d_proyecto['code']
                    ),
                );
            }
            $carta=documentos::find($request->get('id_docf04'));
            $carta->id_d_proyecto=$response_d_proyecto['id'];
            $carta->id_proceso=2;

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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }

    }
    public function verObservaciones2_f04(){
        $userID=Auth::user()->id; 
        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('definicion_proyecto','definicion_proyecto.id','=','documentos.id_d_proyecto')
        ->select('documentos.id_d_proyecto','definicion_proyecto.nombre_d_p','definicion_proyecto.estado_d_p','definicion_proyecto.observaciones_d_p','respuesta_doc.id_documentos','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2')
        ->get();
        return view('usuario.observaciones_f04',['datos'=>$cedula_doc]);
    }
    //subir documento sin datos f05
    public function subirF05_estancia2(Request $request, $name,$nombre){
    
        $request->validate([
            "f05" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f05')){
                $archivo=$request->file('f05');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_l'   => $nombreAF,
                'estado_c_l'=> 1
                //'ID_Alumno'         => $response_alumno['id']
            );
        
            $response_c_liberacion = carta_liberacion::requestInsertcartaL($data5);
            if (isset($response_c_liberacion["code"]) && $response_c_liberacion["code"] == 200) {
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
                        'message'   => $response_c_liberacion['message'],
                        'code'      => $response_c_liberacion['code']
                    ),
                );
            }
            $data6 = array(
                'id_c_liberacion'     =>  $response_c_liberacion['id'],
                'id_proceso'             =>  2
            );
            $response_documentos = documentos::requestInsertDoc($data6);
        
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }
    }
    //actualizar documento f05
    public function actualizarF05_estancia2(Request $request, $name,$nombre){
        
        $request->validate([
            "f05" => "required|mimetypes:application/pdf|max:10000"
        ]);
        $arrayResult = array();

        try{
            if($request->hasFile('f05')){
                $archivo=$request->file('f05');
                $nombreA=$archivo->getClientOriginalName();
                $nombreAF=$name.$nombreA;

                $archivo->move(public_path().'/documentos/',$nombreAF);
                
            }
            $data5 = array(

                'nombre_c_l'   => $nombreAF,
                'estado_c_l'=> 1
            );
        
            $response_c_liberacion = carta_liberacion::requestInsertcartaL($data5);
            if (isset($response_c_liberacion["code"]) && $response_c_liberacion["code"] == 200) {
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
                        'message'   => $response_c_liberacion['message'],
                        'code'      => $response_c_liberacion['code']
                    ),
                );
            }
            $carta=documentos::find($request->get('id_docf05'));
            $carta->id_c_liberacion=$response_c_liberacion['id'];
            $carta->id_proceso=2;
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
            return redirect('estancia2')->with('success','Documento agregado');
        }else
        {
            return redirect('estancia2')->with('errorPDF','Hay un error en el nombre de tu pdf');
        }

    }
    //observaciones f05
    public function verObservaciones2_f05(){
        $userID=Auth::user()->id; 
        $cedula_doc=DB::table('users')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('carta_liberacion','carta_liberacion.id','=','documentos.id_c_liberacion')
        ->select('documentos.id_c_liberacion','carta_liberacion.nombre_c_l','carta_liberacion.estado_c_l','carta_liberacion.observaciones_c_l','respuesta_doc.id_documentos','respuesta_doc.id_documentos','users.name')
        ->where('users.id',$userID)
        ->where('id_proceso','2')
        ->get();
        return view('usuario.observaciones_f05',['datos'=>$cedula_doc]);
    }
}
