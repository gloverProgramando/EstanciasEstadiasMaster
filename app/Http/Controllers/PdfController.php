<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\Asesor_Aca;
use App\Models\Asesor_Emp;
use App\Models\Proyecto;
use App\Models\alumno_def;
use App\Models\asesor_empresarial_def;
use App\Models\proyecto_def;
use App\Models\detalle_def;

use App\Models\carta_aceptacion;
use App\Models\carta_liberacion;
use App\Models\cedula_registro;
use App\Models\definicion_proyecto;
use App\Models\documentos;
use App\Models\etapas_del_proyecto;
use App\Models\respuesta_doc;
use App\Models\universidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class PdfController extends Controller
{
  //Generar PDF CON DATOS

    //descargar f01 estancia
    public function descarga_cd_f01_estancia(){//#
      $userID=Auth::user()->id; 
      $vinculacion=DB::table('universidad')
      ->get();

      $alumno = DB::table('users')
      ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
      ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
      ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
      ->join('carreras', 'alumno.id_carrera', '=', 'carreras.id_carrera')
      ->join('asesor_empresarial', 'formulario.id_asesor_emp', '=', 'asesor_empresarial.id')
      ->join('empresa', 'empresa.id', '=', 'formulario.id_empresa')

      ->where('users.id',$userID)
      ->get();
      $pdf = app('dompdf.wrapper');

      view()->share('usuario.f01',$alumno);
        //############ Permitir ver imagenes si falla ################################
        $contxt = stream_context_create([
          'ssl' => [
              'verify_peer' => FALSE,
              'verify_peer_name' => FALSE,
              'allow_self_signed' => TRUE,
          ]
      ]);

      $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true,'tempDir'=>public_path(),'chroot'=>'firma/']);
      $pdf->getDomPDF()->setHttpContext($contxt);

      $spanish = array('es_utf8', 'es', 'es-ES', 'Spanish_Modern_Sort', 'es_utf8', 'es_ES@euro', 'esp_esp', 'esp_spain', 'spanish_esp', 'spanish_spain', 'es_ES.utf8', 'es-es','es_MX.utf8');
      $pdf -> loadView('usuario.f01_cd_estancia', ['usuario' => $alumno,'vinculacion' => $vinculacion,'fecha'=>$spanish,]);

      return $pdf->download('F-01_Carta_Presentacion_Estancia.pdf');
   }
    //descargar f01 estadia
    public function descarga_cd_f01_estadia(){//#
      $userID=Auth::user()->id; 
      $vinculacion=DB::table('universidad')
      ->get();

      $alumno = DB::table('users')
      ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
      ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
      ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
      ->join('carreras', 'alumno.id_carrera', '=', 'carreras.id_carrera')
      ->join('asesor_empresarial', 'formulario.id_asesor_emp', '=', 'asesor_empresarial.id')
      ->join('empresa', 'empresa.id', '=', 'formulario.id_empresa')

      ->where('users.id',$userID)
      ->get();
      $pdf = app('dompdf.wrapper');

      view()->share('usuario.f01_cd_estadia',$alumno);
        //############ Permitir ver imagenes si falla ################################
        $contxt = stream_context_create([
          'ssl' => [
              'verify_peer' => FALSE,
              'verify_peer_name' => FALSE,
              'allow_self_signed' => TRUE,
          ]
      ]);

      $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true,'tempDir'=>public_path(),'chroot'=>'firma/']);
      $pdf->getDomPDF()->setHttpContext($contxt);
      $spanish = array('es_utf8', 'es', 'es-ES', 'Spanish_Modern_Sort', 'es_utf8', 'es_ES@euro', 'esp_esp', 'esp_spain', 'spanish_esp', 'spanish_spain', 'es_ES.utf8', 'es-es','es_MX.utf8');


      $pdf -> loadView('usuario.f01_cd_estadia', ['usuario' => $alumno,'vinculacion' => $vinculacion,'fecha'=>$spanish,]);
      return $pdf->download('F-01_Carta_Presentacion_Estadia.pdf');
    }

    //descargar f02
   public function descarga_cd_f02_estancia($proces){//*optimizado
      $name=['Estancia I','Estancias II','Estadía','Estadías Nacionales','Servicio Social'];
      $var=[$proces,$name[$proces-1]];
      $userID=Auth::user()->id; 
      $alumno = DB::table('users')
      ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
      ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
      ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
      ->join('asesor_empresarial', 'formulario.id_asesor_emp', '=', 'asesor_empresarial.id')
      ->join('asesor_academico', 'formulario.id_asesor_aca', '=', 'asesor_academico.id')
      ->join('proyecto', 'formulario.id_proyecto', '=', 'proyecto.id')
      ->join('carreras', 'alumno.id_carrera', '=', 'carreras.id_carrera')
      ->where('users.id',$userID)
      ->get();
      $uni=DB::table('universidad')->get();
      view()->share('usuario.f02_cd_estancia',$alumno);
      $spanish = array('es_utf8', 'es', 'es-ES', 'Spanish_Modern_Sort', 'es_utf8', 'es_ES@euro', 'esp_esp', 'esp_spain', 'spanish_esp', 'spanish_spain', 'es_ES.utf8', 'es-es','es_MX.utf8');
      $pdf = PDF::loadView('usuario.f02_cd_estancia', ['usuario' => $alumno,'vinculacion'=>$uni,'fecha'=>$spanish,'proceso'=>$var]);

      return $pdf->download('F-02_Carta_Aceptacion_Estancia.pdf');
   }

    //descargar f03 
    public function descarga_cd_estancia_f03($id_proces){//*funcional
        $userID=Auth::user()->id;

        $users = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->join('empresa', 'formulario.id_empresa', '=', 'empresa.id')
        ->join('asesor_empresarial', 'formulario.id_asesor_emp', '=', 'asesor_empresarial.id')
        ->join('asesor_academico', 'formulario.id_asesor_aca', '=', 'asesor_academico.id')
        ->join('proyecto', 'formulario.id_proyecto', '=', 'proyecto.id')
        ->join('carreras', 'alumno.id_carrera', '=', 'carreras.id_carrera')
        ->join('procesos', 'alumno.id_procesos', '=', 'procesos.id_procesos')
        ->join('tipo', 'empresa.id_tipo', '=', 'tipo.id_tipo')
        ->join('cargo as CE', 'asesor_empresarial.id_cargo_ae', '=', 'CE.id_cargo')
        ->join('cargo as CA', 'asesor_academico.id_cargo_aa', '=', 'CA.id_cargo')
        ->select('CA.nombre_cargo','CE.nombre_cargo','tipo.nombre_tipo','procesos.nombre_proceso','carreras.nombre_carrera','users.name','alumno.ape_paterno','alumno.ape_materno','alumno.nombres','alumno.tel','alumno.matricula','alumno.email_per','alumno.email','alumno.no_ss','alumno.direccion','alumno.id_carrera','empresa.nombre_emp','empresa.giro','empresa.id_tipo','empresa.direccion_emp','empresa.ape_paterno_rh','empresa.ape_materno_rh','empresa.nombres_rh','empresa.tel_lada','empresa.tel_num','empresa.tel_ext','empresa.email_emp','asesor_empresarial.ape_paterno_ae','asesor_empresarial.ape_materno_ae','asesor_empresarial.nombres_ae','asesor_empresarial.id_cargo_ae','asesor_empresarial.tel_lada_ae','asesor_empresarial.tel_num_ae','asesor_empresarial.email_ae','asesor_academico.ape_paterno_aa','asesor_academico.ape_materno_aa','asesor_academico.nombres_aa','asesor_academico.id_cargo_aa','asesor_academico.tel_lada_aa','asesor_academico.tel_num_aa','asesor_academico.email_aa','proyecto.nombre_proyecto')
        ->where('users.id',$userID)
        ->where('alumno.id_procesos', $id_proces)
        ->get();

        view()->share('usuario.f03_cd',$users);

        $pdf = PDF::loadView('usuario.f03_cd', ['usuario' => $users]);

        return $pdf->download('F-03_Cedula_Registro_Estancia.pdf');
    }
    //descargar f04 
    public function descarga_cd_estancia_f04($id_proces,$name){//*optimizado
      $var=$name;
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
      ->select('carreras.nombre_carrera','users.name','alumno.ape_paterno','alumno.ape_materno','alumno.nombres','alumno.tel','alumno.matricula','alumno.email_per','alumno.email','alumno.no_ss','alumno.direccion','alumno.id_carrera','empresa.nombre_emp','empresa.giro','empresa.id_tipo','empresa.direccion_emp','empresa.ape_paterno_rh','empresa.ape_materno_rh','empresa.nombres_rh','empresa.tel_lada','empresa.tel_num','empresa.tel_ext','empresa.email_emp','asesor_empresarial.ape_paterno_ae','asesor_empresarial.ape_materno_ae','asesor_empresarial.nombres_ae','asesor_empresarial.id_cargo_ae','asesor_empresarial.tel_lada_ae','asesor_empresarial.tel_num_ae','asesor_empresarial.email_ae','asesor_academico.ape_paterno_aa','asesor_academico.ape_materno_aa','asesor_academico.nombres_aa','asesor_academico.id_cargo_aa','asesor_academico.tel_lada_aa','asesor_academico.tel_num_aa','asesor_academico.email_aa','proyecto.nombre_proyecto',)
      ->where('users.id',$userID)
      ->where('alumno.id_procesos',$id_proces)

      ->get();
 
      $definicionP = DB::table('users')
      ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
      ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
      ->join('alumno_def', 'formulario_def.id_alumno', '=', 'alumno_def.id')
      ->join('asesor_empresarial_def', 'formulario_def.id_asesor_emp', '=', 'asesor_empresarial_def.id')
      ->join('proyecto_def', 'formulario_def.id_proyecto', '=', 'proyecto_def.id')
      ->join('detalle_def','formulario_def.id_detalle','=','detalle_def.id')
      ->where('users.id',$userID)
      ->where('alumno_def.id_proceso',$id_proces)
      ->get();
      
      //etapas de proyecto
      $etapas=DB::table('users')
      ->join('respuesta_etapa','users.id','=','respuesta_etapa.id_usuario')
      ->join('etapas_del_proyecto','etapas_del_proyecto.id','=','respuesta_etapa.id_etapa_proyecto')
      ->where('users.id',$userID)
      ->get();

      view()->share('usuario.f04',$users);
      //fecha
      $spanish = array('es_utf8', 'es', 'es-ES', 'Spanish_Modern_Sort', 'es_utf8', 'es_ES@euro', 'esp_esp', 'esp_spain', 'spanish_esp', 'spanish_spain', 'es_ES.utf8', 'es-es','es_MX.utf8');
      $pdf = PDF::loadView('usuario.f04_cd_estancia', ['usuario' => $users,'datos' => $definicionP,'etapas' => $etapas,'fecha'=>$spanish,'proceso'=>$var]);
 
      return $pdf->download('F-04_Definicion_de_Proyecto_Estancia.pdf');
    } 
    //descargar f05 
    public function descarga_cd_estancia_f05($proces){//*optimizado
      $name=['ESTANCIAS I','ESTANCIAS II','ESTADÍA','ESTADÍAS NACIONALES','SERVICIO SOCIAL'];
      $var=[$proces,$name[$proces-1]];
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
      ->select('carreras.nombre_carrera','users.name','alumno.ape_paterno','alumno.ape_materno','alumno.nombres','alumno.tel','alumno.matricula','alumno.email_per','alumno.email','alumno.no_ss','alumno.direccion','alumno.id_carrera','empresa.nombre_emp','empresa.giro','empresa.id_tipo','empresa.direccion_emp','empresa.ape_paterno_rh','empresa.ape_materno_rh','empresa.nombres_rh','empresa.tel_lada','empresa.tel_num','empresa.tel_ext','empresa.email_emp','asesor_empresarial.ape_paterno_ae','asesor_empresarial.ape_materno_ae','asesor_empresarial.nombres_ae','asesor_empresarial.id_cargo_ae','asesor_empresarial.tel_lada_ae','asesor_empresarial.tel_num_ae','asesor_empresarial.email_ae','asesor_academico.ape_paterno_aa','asesor_academico.ape_materno_aa','asesor_academico.nombres_aa','asesor_academico.id_cargo_aa','asesor_academico.tel_lada_aa','asesor_academico.tel_num_aa','asesor_academico.email_aa','proyecto.nombre_proyecto')
      ->where('users.id',$userID)

      ->get();
 
      $definicionP = DB::table('users')
      ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
      ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
      ->join('alumno_def', 'formulario_def.id_alumno', '=', 'alumno_def.id')
      ->join('asesor_empresarial_def', 'formulario_def.id_asesor_emp', '=', 'asesor_empresarial_def.id')
      ->join('proyecto_def', 'formulario_def.id_proyecto', '=', 'proyecto_def.id')
      ->join('detalle_def','formulario_def.id_detalle','=','detalle_def.id')
      ->where('users.id',$userID)

      ->get();
      
      $uni=DB::table('universidad')->get();

      view()->share('usuario.f05_cd_estancia',$users);
      //fecha
      $spanish = array('es_utf8', 'es', 'es-ES', 'Spanish_Modern_Sort', 'es_utf8', 'es_ES@euro', 'esp_esp', 'esp_spain', 'spanish_esp', 'spanish_spain', 'es_ES.utf8', 'es-es','es_MX.utf8');
      $pdf = PDF::loadView('usuario.f05_cd_estancia', ['usuario' => $users,'datos' => $definicionP,'vinculacion'=>$uni,'fecha'=>$spanish,'proceso'=>$var]);
 
      return $pdf->download('F-05_Carta_de_liberacion_Estancia.pdf');
    }
    

 //eliminar registros

      //eliminar f03
      public function eliminarF03Estancia($proces,$id_a,$id_e,$id_a_e,$id_a_a,$id_p){//*funcioal 

        Alumno::find($id_a)->delete();
        Empresa::find($id_e)->delete();
        Asesor_Emp::find($id_a_e)->delete();
        Asesor_Aca::find($id_a_a)->delete();
        Proyecto::find($id_p)->delete();
        return redirect('estancia1/'.$proces)->with('eliminarF03','F-03 Eliminado');
      }
      //eliminar f04 estancia
      public function eliminarF04(Request $req,$proces,$id_a,$id_a_e,$id_p,$id_d){//*optimizado   
        $userID=Auth::user()->id; 

        alumno_def::find($id_a)->delete();
        asesor_empresarial_def::find($id_a_e)->delete();
        proyecto_def::find($id_p)->delete();
        detalle_def::find($id_d)->delete();

        $id_etapa_1=$req->get('id_etapas_1');
        $id_etapa_2=$req->get('id_etapas_2');
        $id_etapa_3=$req->get('id_etapas_3');
        $id_etapa_4=$req->get('id_etapas_4');
        $id_etapa_5=$req->get('id_etapas_5');
        $id_etapa_6=$req->get('id_etapas_6');
        $id_etapa_7=$req->get('id_etapas_7');
        $id_etapa_8=$req->get('id_etapas_8');
        $id_etapa_9=$req->get('id_etapas_9');
        $id_etapa_10=$req->get('id_etapas_10');
        $id_etapa_11=$req->get('id_etapas_11');
        $id_etapa_12=$req->get('id_etapas_12');
        $id_etapa_13=$req->get('id_etapas_13');
        $id_etapa_14=$req->get('id_etapas_14');
        $id_etapa_15=$req->get('id_etapas_15');

        try {
          $etapas1 = etapas_del_proyecto::find($id_etapa_1)->delete();
          $etapas2 = etapas_del_proyecto::find($id_etapa_2)->delete();
          $etapas3 = etapas_del_proyecto::find($id_etapa_3)->delete();
          $etapas4 = etapas_del_proyecto::find($id_etapa_4)->delete();
          $etapas5 = etapas_del_proyecto::find($id_etapa_5)->delete();
          $etapas6 = etapas_del_proyecto::find($id_etapa_6)->delete();
          $etapas7 = etapas_del_proyecto::find($id_etapa_7)->delete();
          $etapas8 = etapas_del_proyecto::find($id_etapa_8)->delete();
          $etapas9 = etapas_del_proyecto::find($id_etapa_9)->delete();
          $etapas10 = etapas_del_proyecto::find($id_etapa_10)->delete();
          $etapas11 = etapas_del_proyecto::find($id_etapa_11)->delete();
          $etapas12 = etapas_del_proyecto::find($id_etapa_12)->delete();
          $etapas13 = etapas_del_proyecto::find($id_etapa_13)->delete();
          $etapas14 = etapas_del_proyecto::find($id_etapa_14)->delete();
          $etapas15 = etapas_del_proyecto::find($id_etapa_15)->delete();
        } catch (\Throwable $th) {
          //throw $th;
        }
        return redirect('estancia1/'.$proces)->with('eliminarF04','F-04 Eliminado');

      }

    //cancelar documentos
    public function cancelar_carga_horaria_Estancia(Request $req,$proces,$id_docs,$id_d,$idDoc){//*funcional
      $Ntab=['carga_horaria','constancia_derecho','carta_responsiva','carta_presentacion','carta_aceptacion',
        'cedula_registro','definicion_proyecto','carta_liberacion'];
      $nombreA=$req->get('ubiD');
      $carta=documentos::find($id_docs);//*quita el id del doc para no eliminar todos (no se porque ocurra eso)
      switch ($idDoc) {//*define la columna que modificara
        case 1:$carta->id_c_horaria=NULL;
          break;
        case 2:$carta->id_c_derecho=NULL;
          break;
        case 3:$carta->id_c_responsiva=NULL;
          break;
        case 4:$carta->id_c_presentacion=NULL;
          break;
        case 5:$carta->id_c_aceptacion=NULL;
          break;
        case 6:$carta->id_c_registro=NULL;
          break;
        case 7:$carta->id_d_proyecto=NULL;
          break;
        case 8:$carta->id_c_liberacion=NULL;
          break;
        case 9:$carta->id_c_compromiso=Null;
        default:
          break;
      }
      $carta->save();
      $del=DB::table($Ntab[$idDoc-1])//*elimina el registro del documento
      ->delete($id_d);
      $path=public_path().'/documentos/'.$nombreA;
      if(File::exists($path)){
        File::delete($path);
        return redirect('estancia1/'.$proces)->with('cancelar_carga_horaria','Carga horaria Cancelada');
      }else{
        return redirect('estancia1/'.$proces)->with('cancelar_carga_horaria','Carga horaria Cancelada');
      }
    }
}
