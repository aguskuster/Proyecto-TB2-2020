<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumosModel;
use App\empleadoModel;
use App\clienteModel;
use App\ventaModel;
class ventaController extends Controller
{
   

    public function altaVenta (Request $request) {
        $venta = new ventaModel;

        $venta -> clienteRUT = $request->get('selectClienteRut');
        $venta -> clienteNombre = $request->get('selectClienteNombre');
        $venta -> insumoNombre = $request->get('selectProductoNombre');
        $venta -> insumoPrecio = $request->get('selectPrecioUnitario');
        $venta -> insumoCantidad = $request->input('selectProductoCantidad');
        $venta -> empleadoNombre = $request->get('selectVendedor');
        
        $venta -> save();

        return view('formulariosAlta/altaVenta', ['ventaAgregada' => $venta]);
    }



    public function cargarDatosVenta() {
        $empleados = empleadoModel::all();
        $cliente = clienteModel::all();
        $producto = insumosModel::all();

        $datos = [$producto, $empleados , $cliente];

        return view('venta',['datos' => $datos]);
    }
}
