<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicio_socialesController extends Controller
{
    public function ver(){
        return view('servicio_social');
    }
}
