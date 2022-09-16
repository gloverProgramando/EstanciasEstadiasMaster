<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class documentosServicioSocialAdminController extends Controller
{
    public function ver(){
        return view('admin/documentosServicio_social');
    }
}
