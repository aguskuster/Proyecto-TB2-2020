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

        $empleado -> ci = $request->input('ci');
        $empleado -> nombre = $request->input('nombre');
        $empleado -> apellido = $request->input('apellido');
        $empleado -> edad = $request->input('edad');
        $empleado -> email = $request->input('email');
        $empleado -> telefono = $request->input('telefono');
        
        $empleado -> save();
    }
}
