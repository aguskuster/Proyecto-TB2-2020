<?php

namespace App\Http\Controllers;

use App;
use PDF;
use App\comprasModel;
use Illuminate\Http\Request;

class pdfController extends Controller
{


    public function PDFProductos(){
     
        $compras = comprasModel::all();

        $pdf = PDF::loadView('./reportes/reporteCompras', compact('compras'));

        return $pdf->stream('ReporteCompra.pdf');
    }
}
