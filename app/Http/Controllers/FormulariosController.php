<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Exception;
use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function create() {

        try {
            /*$formulario = Formulario::getAllFormulario();
        
            $data = array(
            'formulario'    => $formulario
            );*/

            return view('admin.formularios');
        } catch(\Illuminate\Database\QueryException $ex) {
            dd("Error");
        } catch( Exception $ex ){
            dd("Error:". $ex->getMessage());
        }
    }
}
