<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumosModel;
use App\empleadoModel;
use App\clienteModel;
class ventaController extends Controller
{
    public function cargarDatosVenta() {
        $empleados = empleadoModel::all();
        $cliente = clienteModel::all();
        $producto = insumosModel::all();

        $datos = [$producto, $empleados , $cliente];

        return view('venta',['datos' => $datos]);
    }

    public function altaVenta (Request $request) {
        $venta = new ventaModel;

        $venta -> ci = $request->input('ci');
        $venta -> nombre = $request->input('nombre');
        $venta -> apellido = $request->input('apellido');
        $venta -> edad = $request->input('edad');
        $venta -> email = $request->input('email');
        $venta -> telefono = $request->input('telefono');
        
        $venta -> save();
    }
}
