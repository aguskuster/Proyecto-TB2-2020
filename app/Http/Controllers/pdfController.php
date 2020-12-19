<?php

namespace App\Http\Controllers;

use App;
use PDF;
use App\comprasModel;
use Illuminate\Http\Request;

class pdfController extends Controller
{


    public function generarPDFIndividual(){
     
        $compras = comprasModel::where('id',$id)->first();

        $pdf = PDF::loadView('./reportes/reporteComprasIndividual', compact('compras'));

        return $pdf->stream('ReporteCompra.pdf');
    }

    public function generarPDFCompraFiltrado(Request $request){
        $tipo = $request -> get('tipoBuscar');

        if ($tipo== "day"){

            $compras = comprasModel::where('created_at',$request->input('fecha'))->first();

            $pdf = PDF::loadView('./reportes/reporteCompras', compact('compras'));
    
            return $pdf->stream('ReporteCompra.pdf');
        }elseif($tipo=="month"){

            $compras = comprasModel::where('created_at',$request->input('fecha'))->first();

            $pdf = PDF::loadView('./reportes/reporteCompras', compact('compras'));
    
            return $pdf->stream('ReporteCompra.pdf');
        }else{

            $compras = comprasModel::where('created_at',$request->input('fecha'))->first();

            $pdf = PDF::loadView('./reportes/reporteCompras', compact('compras'));
    
            return $pdf->stream('ReporteCompra.pdf');
        }
        
        

    }
}
