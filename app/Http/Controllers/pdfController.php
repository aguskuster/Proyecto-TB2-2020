<?php

namespace App\Http\Controllers;

use App;
use PDF;
use App\comprasModel;
use Illuminate\Http\Request;

class pdfController extends Controller
{


    public function PDFProductos($id){
     
        $compras = comprasModel::where('id',$id)->first();

        $pdf = PDF::loadView('./reportes/reporteCompras', compact('compras'));

        return $pdf->download('ReporteCompra.pdf');
    }
}
