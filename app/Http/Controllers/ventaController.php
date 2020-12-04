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

       
        

        return redirect('historialVenta');
        
    
    }

    public function listarHistorialVenta () {

        $cargarVentas = ventaModel::all();
        return view('historialVenta',['ventas' => $cargarVentas]);

    }



    public function cargarDatosVenta() {
        $empleados = empleadoModel::all();
        $cliente = clienteModel::all();
        $producto = insumosModel::all();

        $datos = [$producto, $empleados , $cliente];

        return view('venta',['datos' => $datos]);
    }



    public function listarVentaParaEliminar($id){
        $venta = ventaModel::where('id',$id)->first();
        return view('formulariosBaja/bajaVenta', ['ventaSeleccionadoEliminar' => $venta]);
    }


    public function eliminarVenta(Request $request){
        $v = ventaModel::find($request->input('id'));
        $v->delete();
      
        $venta = ventaModel::all();

        return view('venta',['datos' => $venta]);

    }


}
