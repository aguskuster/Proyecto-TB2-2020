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
        $cliente = clienteModel::where('rut',$request->get('selectClienteRut'))->value('empresa');
        $productoPrecio = comprasModel::where('nombreProducto',$request->get('selectProductoNombre'))->value('precioUnitario');

        $venta -> clienteRUT = $request->get('selectClienteRut');
        $venta -> clienteNombre = $cliente;
        $venta -> insumoNombre = $request->get('selectProductoNombre');
        $venta -> insumoPrecio =  $productoPrecio;
        $venta -> insumoCantidad = $request->input('selectProductoCantidad');
        $venta -> empleadoNombre = $request->input('inputVendedor');
        


        $curTime = new \DateTime();
        $venta -> anio = $curTime->format('Y');
        $venta -> mes = $curTime->format('m');
        $venta -> dia = $curTime->format('d');
       
      
        $venta -> save();

        $compra = comprasModel::where('nombreProducto',$request->get('selectProductoNombre'))->first();
        $compra -> cantidad = $compra -> cantidad - $request->input('selectProductoCantidad');
        $compra -> save();
        

        return redirect('historialVenta');
        
    
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
        $cliente = clienteModel::where('rut',$request->get('selectClienteRut'))->value('empresa');
        $productoPrecio = comprasModel::where('nombreProducto',$request->get('selectProductoNombre'))->value('precioUnitario');

        $v->clienteRUT = $request->get('selectClienteRut');
        $v->clienteNombre = $cliente;
        $v->insumoNombre = $request->get('selectProductoNombre');
        $v->insumoPrecio = $productoPrecio;
        $v->insumoCantidad = $request->input('insumoCantidad');
        $v->empleadoNombre = $request->get('selectVendedor');

        $v->save();
        $resultado = self::listarHistorialVenta();
        return $resultado;


    }

    public function listarVentaParaModificar($id){
        $venta = ventaModel::where('id',$id)->first();
        $empleados = empleadoModel::all();
        $cliente = clienteModel::all();
        $producto = comprasModel::all();
        $datos = [$producto, $empleados , $cliente];
        return view('formulariosModificar/modificarVenta', ['ventaSeleccionado' => $venta],['datos' => $datos]);
        

       
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
