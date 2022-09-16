<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estadia_NacionalesController extends Controller
{
    public function ver(){
        return view('estadia_nacionales');
    }
}
