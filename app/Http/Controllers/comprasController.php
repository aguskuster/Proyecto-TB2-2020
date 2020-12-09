<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumosModel;
use App\empleadoModel;
use App\comprasModel;
use App\carritoModel;


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
        $compra -> empleado = $request->get('selectVendedor');
       
        $compra -> save();

        $p = true;

        $empleados = empleadoModel::all();
        return redirect('compras', ['empleados' => $empleados , 'compraGenerada' => $p]); 
    
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
/*

    
    
    public function cargarDatosCompra(){
       
            $empleados = empleadoModel::all();
            $producto = insumosModel::all();
    
            $datos = [$producto, $empleados];
    
            return view('compra',['datos' => $datos]);
        
    
    }

   



    public function listarCompraParaEliminar($id){
        $compra = comprasModel::where('id',$id)->first();
        return view('formulariosBaja/bajaCompra', ['compraSeleccionadoEliminar' => $compra]);
    }
    
    public function eliminarCompra(Request $request){
        $i = comprasModel::find($request->input('id'));
        $i->delete();
      
        

        return redirect('historialDeCompra');

    }


    
    
    public function modificarHistorialCompra(Request $request){
        $i = comprasModel::find($request->input('id'));
        
        $i->proveedor = $request->input('proveedor');
        $i->categoria = $request->input('categoria');
        $i->nombreProducto = $request->input('nombreProducto');
        $i->precioUnitario = $request->input('precioUnitario');
        $i->moneda = $request->input('moneda');
        $i->cantidad = $request->input('cantidad');
        $i->empleado = $request->input('empleado');

        $i->save();
        $resultado = self::listarHistorialCompra();
        return $resultado;


    }

    public function listarHisotrialCompraParaModificar($id){
        $historial = comprasModel::where('id',$id)->first();
        return view('formulariosModificar/modificarHisotrialCompra', ['compraHistorial' => $historial]);
    }
 

 */
    


}
