<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionMailable;
use App\Models\User;

class CorreoController extends Controller
{
    static function store($idU, $doc, $status){
        $direc=User::find($idU)->email;
        $correo=new NotificacionMailable($doc, $status);
        try {
            Mail::to($direc)->send($correo);
            return "Correo enviado";
        } catch (\Throwable $th) {
            return "Correo no enviado";
        }
        
    }
    /*static function observacion($idU, $doc){
        $direc=User::find($idU)->email;
        $correo = new NotificacionMailable($doc);
        Mail::to($direc)->send($correo);
    }*/
}
