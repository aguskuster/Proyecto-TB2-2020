<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comprasModel;
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

        self::descontarArticulo($request->get('selectProductoNombre'));
        

        return redirect('historialVenta');
        
    
    }

    public function descontarArticulo($articulo){
        $compra = comprasModel::where('nombreProducto',$articulo,'AND','proveedor', $marca)->first();

    }

    
 
    public function listarHistorialVenta () {

        $cargarVentas = ventaModel::all();
        return view('historialVenta',['ventas' => $cargarVentas]);

    }



    public function cargarDatosVenta() {
        $empleados = empleadoModel::all();
        $cliente = clienteModel::all();
        $producto = comprasModel::all();

        $datos = [$producto, $empleados , $cliente];

        return view('venta',['datos' => $datos]);
    }


    public function modificarVenta(Request $request){
        $v = ventaModel::find($request->input('id'));

        $v->clienteRUT = $request->input('clienteRUT');
        $v->clienteNombre = $request->input('clienteNombre');
        $v->insumoNombre = $request->input('insumoNombre');
        $v->insumoPrecio = $request->input('insumoPrecio');
        $v->insumoCantidad = $request->input('insumoCantidad');
        $v->empleadoNombre = $request->input('empleadoNombre');

        $v->save();
        $resultado = self::listarHistorialVenta();
        return $resultado;


    }

    public function listarVentaParaModificar($id){
        $venta = ventaModel::where('id',$id)->first();
        return view('formulariosModificar/modificarVenta', ['ventaSeleccionado' => $venta]);
    }
 





    public function listarVentaParaEliminar($id){
        $venta = ventaModel::where('id',$id)->first();
        return view('formulariosBaja/bajaVenta', ['ventaSeleccionadoEliminar' => $venta]);
    }


    public function eliminarVenta(Request $request){
        $v = ventaModel::find($request->input('id'));
        $v->delete();
      
        

        $resultado = self::listarHistorialVenta();
        return $resultado;

    }


}
