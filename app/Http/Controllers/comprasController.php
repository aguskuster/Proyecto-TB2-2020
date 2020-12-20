<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\empleadoModel;
use App\comprasModel;


use App;
class comprasController extends Controller
{
    
     public function altaCompra  (Request $request) {
       
        $compra = new comprasModel;

        $compra -> proveedor = $request->input('inputProductoMarca');
        $compra -> categoria = $request->input('inputProductoCategoria');
        $compra -> nombreProducto = $request->input('inputProductoNombre');
        $compra -> precioUnitario = $request->input('inputPrecioUnitario');
        $compra -> moneda = $request->input('inputMoneda');
        $compra -> cantidad = $request->input('inputProductoCantidad');
        $compra -> empleado = $request->input('inputEmpleado');

        $curTime = new \DateTime();
        $compra -> anio = $curTime->format('Y');
        $compra -> mes = $curTime->format('m');
        $compra -> dia = $curTime->format('d');
        
        $compra -> save();

        

        $resultado = self::listarHistorialCompra();
        return $resultado;
    
    }

    public function listarHistorialCompra () {
        $compra = comprasModel::all();
        return view('historialDeCompra',['compras' => $compra]);

    }

    public function cargarDatosCompra(){
        $empleados = empleadoModel::all();
        return view('compra',['empleados' => $empleados]);

    }

    public function listarStock(){
        $compra = comprasModel::all();
        return view('stock',['stockHabilitado' => $compra]);
    }

    public function listarProductoParaModificar($id){
        $compra = comprasModel::where('id',$id)->first();
        return view('formulariosModificar/modificarStock', ['StockSeleccionadoModificar' => $compra]);
    }

    public function modificarStock(Request $request){
        $i = comprasModel::find($request->input('id'));
        
        $i->proveedor = $request->input('inputModificarMarca');
        $i->categoria = $request->input('inputModificarCategoria');
        $i->nombreProducto = $request->input('inputModificarNombreProducto');
        $i->precioUnitario = $request->input('inputModificarPrecioUnitario');
        $i->moneda = $request->input('inputModificarMoneda');
        $i->cantidad = $request->input('inputModificarCantidad');
        

        $i->save();
        $resultado = self::listarStock();
        return $resultado;

    }
    
    public function listarProductoParaEliminar($id){
        $compra = comprasModel::where('id',$id)->first();
        return view('formulariosBaja/bajaStock', ['StockSeleccionadoEliminar' => $compra]);
    }

    public function eliminarStock(Request $request){
        $stock = comprasModel::find($request->input('id'));
        $stock->delete();
      
        $resultado = self::listarStock();
        return $resultado;
    }

   


}
