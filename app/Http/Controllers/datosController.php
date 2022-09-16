<?php

namespace App\Http\Controllers;

use App\Models\universidad;
use Illuminate\Http\Request;
use Exception;
use Symfony\Component\HttpFoundation\Response;
class datosController extends Controller
{
    //
    public function ver(){
       $uni= universidad::all();
        return view('admin.datos',['universidad'=>$uni]);
    }

    public function guardar(Request $request){
        
        $request->validate([
            "nombre" => "required",
            "cargo" => "required",
            "firma" => "required"

        ]);
        try{
            $nombre        = $request->input('nombre');
            $cargo       = $request->input('cargo');
            if($request->hasFile('firma')){
                $firma=$request->file('firma');
                $nombreF=$firma->getClientOriginalName();
                $firma->move(public_path().'/firma/',$nombreF);
            }
            $data5 = array(

                'nombre_u'   => $nombre,
                'cargo_u'    =>  $cargo,
                'firma'    =>  $nombreF         
            );
        
            $response_uni = universidad::requestInsertUni($data5);
            if (isset($response_uni["code"]) && $response_uni["code"] == 200) {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => true,
                        'message'   => "Se ha guardado el registro",
                        'code'      => "200",
                    ),
                );
        
            } else {
                $arrayResult = array(
                    'Response'  => array(
                        'ok'        => false,
                        'message'   => $response_uni['message'],
                        'code'      => $response_uni['code']
                    ),
                );
            }
        } catch(\Illuminate\Database\QueryException $ex) {
            $arrayResult = array(
                'Response'  => array(
                    'message'   => "Error: " . " - " . "Fallo :v",
                    "code"      => "500"
                )
            );
        } catch( Exception $ex ){
            $arrayResult = array(
              'Response' => array(
                'message' => "Error: " . " - " . $ex->getMessage(),
                "code"    => "500"
              )
            );
        }

        return redirect('datos')->with('success','Datos Guardados');
    }

    public function actualizar(Request $request){
        $request->validate([
            "nombreA" => "required",
            "cargoA" => "required",
            "firmaA" => "required"

        ]);
        $nombre        = $request->input('nombreA');
        $cargo       = $request->input('cargoA');
        if($request->hasFile('firmaA')){
            $firma=$request->file('firmaA');
            $nombreF=$firma->getClientOriginalName();
            $firma->move(public_path().'/firma/',$nombreF);
        }
        $uni=universidad::find($request->input('idA'));
        $uni->nombre_u=$nombre;
        $uni->cargo_u=$cargo;
        $uni->firma=$nombreF;
        $uni->save();

        return redirect('datos')->with('success','Datos actualizados');
    }

    public function imagen( $filename){
        $path = storage_path('firma/' . $filename);
        if (!universidad::exists($path)) {
            abort(404);
        }
        $file = universidad::get($path);
        $type = universidad::mimeType($path);
        $response = universidad::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
}
