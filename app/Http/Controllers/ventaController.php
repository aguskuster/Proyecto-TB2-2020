<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumosModel;
use App\empleadoModel;
use App\clienteModel;
class ventaController extends Controller
{
    public function cargarDatos () {
        $empleados = empleadoModel::all();
        $cliente = clienteModel::all();
        $producto = insumosModel::all();

        $datos = [$producto, $empleados , $cliente];

        return view('venta',['datos' => $datos]);
    }
}
