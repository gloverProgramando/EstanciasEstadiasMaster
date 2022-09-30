<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Activar_botones;
use Exception;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class BotonesController extends Controller
{
    //
    
    public function ver(){

        $btns = DB::table('activar_botones')
        ->get();

        return view('admin.botonesArchivos',['btns'=>$btns]);
    }

    public function updateBoton(Request $request)
    {
        
        $bs= Activar_botones::find(1);
        $bs->periodo1 = $request->post('btnradio1');
        $bs->periodo2 = $request->post('btnradio3');
        $bs->periodo3 = $request->post('btnradio5');

      $bs->save(); 
      return redirect()->to('/activar_botones')->with('success','Se ha cambiado la configuracion');
    }
}
