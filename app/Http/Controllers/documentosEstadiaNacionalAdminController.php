<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class documentosEstadiaNacionalAdminController extends Controller
{
    public function ver(){
        return view('admin/documentosEstadia_nacionales');
    }
}
