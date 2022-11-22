<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Redirect;

class datatableController extends Controller
{
    public function ver(){
        $users = User::all();
        return view('admin.datatable',compact('users'));
    }

    public function verdetalles(){
        $users = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('respuesta_doc','users.id','=','respuesta_doc.id_usuario')
        ->join('documentos','documentos.id','=','respuesta_doc.id_documentos')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->join('asesor_academico','formulario.id_asesor_aca', '=', 'asesor_academico.id')
        ->join('asesor_empresarial','formulario.id_asesor_emp', '=', 'asesor_empresarial.id')
        ->join('empresa','formulario.id_empresa', '=', 'empresa.id')
        ->join('procesos', 'procesos.id_procesos', '=', 'alumno.id_procesos')
        ->join('carreras', 'carreras.id_carrera', '=', 'alumno.id_carrera')
        ->get();
        return view('admin.datatabledetalle',compact('users'));
    }
}