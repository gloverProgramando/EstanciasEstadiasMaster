<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescargaController extends Controller
{
    //
    function descarga_sd_estancia_f03(){//#
        $path=public_path('archivos/F-03_CEDULA_DE_REGISTRO_ESTANCIA.xlsx');
        return response()->download($path);
    }
    function descarga_sd_estadia_f03(){//#
        $path=public_path('archivos/F-03_CEDULA_DE_REGISTRO_ESTADIAS.xlsx');
        return response()->download($path);
    }
    function descarga_reporte_estancia($proces){//*optimizado
        switch($proces){
            case 1:$path=public_path('archivos/Formato Evaluacion Estancias.pdf');
              break;
            case 2:$path=public_path('archivos/Formato Evaluacion Estancias.pdf');
              break;
            case 3:$path=public_path('archivos/Formato Evaluacion Estadias.pdf');
              break;
            case 4:$path=public_path('archivos/Formato Evaluacion Estadias.pdf');
              break;
            case 5://ubicacion
              break;  
            default:
              break;
          }
        return response()->download($path);
    }
    function descarga_carta_responsiva(){//*funcional
        $path=public_path('archivos/Carta de exclusión y autorización.doc');
        return response()->download($path);
    }
    function descarga_carta_presentacion($proces){//*optimizado
        switch($proces){
          case 1:$path=public_path('archivos/carta de presentacion.docx');
            break;
          case 2:$path=public_path('archivos/carta de presentacion.docx');
            break;
          case 3:$path=public_path('archivos/carta de presentacion estadia.docx');
            break;
          case 4:$path=public_path('archivos/carta de presentacion estadia.docx');
            break;
          case 5:$path=public_path('archivos/CARTA DE PRESENTACIÓN SERVICIO SOCIAL.docx');
            break;  
          default:
            break;
        }
        return response()->download($path);
    }
    function descarga_carta_compromiso(){//*unicamente para la carta compromiso de servicio social
      $path=public_path('archivos/CARTA COMPROMISO DE SERVICIO SOCIAL.docx');
      return response()->download($path);
    }

    function descarga_reporte_mensual(){//*unicamente para el reporte mensual de servicio social
      $path=public_path('archivos/REPORTE MENSUAL DE ACTIVIDADES (TF03).docx');
      return response()->download($path);
    }
}
