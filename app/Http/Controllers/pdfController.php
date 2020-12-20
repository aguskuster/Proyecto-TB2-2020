<?php

namespace App\Http\Controllers;

use App;
use PDF;
use App\comprasModel;
use App\ventaModel;
use Illuminate\Http\Request;

class pdfController extends Controller
{


    public function generarPDFIndividualCompra($id){
     
        $compras = comprasModel::where('id',$id)->first();

        $pdf = PDF::loadView('./reportes/reporteComprasIndividual', compact('compras'));

        return $pdf->stream('ReporteCompra.pdf');
    }



    public function generarPDFCompraFiltrado(Request $request){
            $dia = $request->input('dia');
            $mes = $request->input('mes');
            $anio = $request->input('anio');

            $compras = comprasModel::where('anio','LIKE',$anio)->where('mes','LIKE',$mes)->where('dia','LIKE',$dia)->get();
            $pdf = PDF::loadView('./reportes/reporteCompras', compact('compras'));
            return $pdf->stream('ReporteCompra.pdf');
    }


    public function generarPDFIndividualVenta($id){
     
        $ventas = ventaModel::where('id',$id)->first();

        $pdf = PDF::loadView('./reportes/reporteVentasIndividual', compact('ventas'));

        return $pdf->stream('ReporteVenta.pdf');
    }



    public function generarPDFVentaFiltrado(Request $request){
            $dia = $request->input('dia');
            $mes = $request->input('mes');
            $anio = $request->input('anio');

            $ventas = ventaModel::where('anio','LIKE',$anio)->where('mes','LIKE',$mes)->where('dia','LIKE',$dia)->get();
            $pdf = PDF::loadView('./reportes/reporteVentas', compact('ventas'));
            return $pdf->stream('ReporteVenta.pdf');
    }
}
