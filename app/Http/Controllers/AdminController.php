<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {

        //inicio admin 
        //contador usuarios
        $userC = ['usersCount' => Users::count()];
        $adminC = ['adminsCount' => Users::where('role', 'admin')->count()];
        $data = Arr::collapse([$userC,$adminC]);

        $estancia1 = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('id_procesos','1')
        ->count();
        $estancia2 = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('id_procesos','2')
        ->count();
        $estan1 = ['estancia1' =>$estancia1];
        $estan2 = ['estancia2' => $estancia2];
        $data1 = Arr::collapse([$estan1,$estan2]);

        $estadias = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('id_procesos','3')
        ->count();
        $estadias_nacionales = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('id_procesos','4')
        ->count();
        $estad = ['estadia' =>$estadias];
        $estad_n = ['estadia_nacional' =>$estadias_nacionales];
        $data2 = Arr::collapse([$estad,$estad_n]);

        $servicio_s = DB::table('users')
        ->join('respuesta', 'users.id', '=', 'respuesta.id_usuario')
        ->join('formulario', 'respuesta.id_formulario', '=', 'formulario.id')
        ->join('alumno', 'formulario.id_alumno', '=', 'alumno.id')
        ->where('id_procesos','5')
        ->count();

        return view('admin.index',['datos'=>$data,'estancia'=>$data1,'estadia'=>$data2,'servicio_social'=>$servicio_s]);
    }
    public function ver(){
       
        return view('admin.editar_admin');
    }
    
    public function editar(Request $request){
        $this->validate(request(), [
            'password' => 'required'
        ]);
        $userID=Auth::user()->id;
        $user=User::find($userID);
        $user->password=request('password');
        $user->save();
        return redirect()->to('/admin')->with('success','Contraseña cambiada');
    }
}
