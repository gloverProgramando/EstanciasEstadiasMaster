<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class falloController extends Controller
{
    //
    public function ver(){
        return view('fallos');
    }

    public function verRegistroFinalCedula($id_proces){
        $userID=Auth::user()->id; 

        $datosCedulaFormulario = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('users.id',$userID)
        ->where('alumno.id_procesos',$id_proces)
        ->get();

        
        $datosCedulaFormularioAlumno = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('users.id',$userID)
        ->where('alumno.id_procesos',$id_proces)
        ->get();

            $datosCF   = ['datosCedula' => $datosCedulaFormulario];
            $datosCFAlumno   = ['datosCedulaAlumno' => $datosCedulaFormularioAlumno];

            $datos = Arr::collapse([$datosCF,$datosCFAlumno]);

        $definicionProyecto = DB::table('users')
        ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
        ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
        ->join('alumno_def', 'formulario_def.id_alumno', '=', 'alumno_def.id')
        ->join('asesor_empresarial_def', 'formulario_def.id_asesor_emp', '=', 'asesor_empresarial_def.id')
        ->join('proyecto_def', 'formulario_def.id_proyecto', '=', 'proyecto_def.id')
        ->join('detalle_def','formulario_def.id_detalle','=','detalle_def.id')
        ->where('users.id',$userID)
        ->where('alumno_def.id_proceso',$id_proces)

        ->get();
        $datosDefinicionProyecto = DB::table('users')
        ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
        ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
        ->join('alumno_def', 'formulario_def.id_alumno', '=', 'alumno_def.id')
        ->where('users.id',$userID)
        ->where('alumno_def.id_proceso',$id_proces)
        ->get();

            $defP  = ['def' => $definicionProyecto];
            $datosDp  = ['datosDef' => $datosDefinicionProyecto];

            $datos1 = Arr::collapse([$defP,$datosDp]);
            
      
      
        return view('registro_final_cedula',['datos'=>$datos,'definicionP'=>$datos1]);
    }

    public function verRegistroFinalDefinicion(){
        $userID=Auth::user()->id; 

        $datosCedulaFormulario = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->where('users.id',$userID)
        ->get();

        
        $datosCedulaFormularioAlumno = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('users.id',$userID)
        ->get();

            $datosCF   = ['datosCedula' => $datosCedulaFormulario];
            $datosCFAlumno   = ['datosCedulaAlumno' => $datosCedulaFormularioAlumno];

            $datos = Arr::collapse([$datosCF,$datosCFAlumno]);

        $definicionProyecto = DB::table('users')
        ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
        ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
        ->join('alumno_def', 'formulario_def.id_alumno', '=', 'alumno_def.id')
        ->join('asesor_empresarial_def', 'formulario_def.id_asesor_emp', '=', 'asesor_empresarial_def.id')
        ->join('proyecto_def', 'formulario_def.id_proyecto', '=', 'proyecto_def.id')
        ->join('detalle_def','formulario_def.id_detalle','=','detalle_def.id')
        ->where('users.id',$userID)

        ->get();
        $datosDefinicionProyecto = DB::table('users')
        ->join('respuesta_def', 'users.id', '=', 'respuesta_def.id_usuario')
        ->join('formulario_def', 'respuesta_def.id_formulario', '=', 'formulario_def.id')
        ->where('users.id',$userID)
        ->get();

            $defP  = ['def' => $definicionProyecto];
            $datosDp  = ['datosDef' => $datosDefinicionProyecto];

            $datos1 = Arr::collapse([$defP,$datosDp]);
            
      
      
        return view('registro_final_definicion',['datos'=>$datos,'definicionP'=>$datos1]);
    }
}
