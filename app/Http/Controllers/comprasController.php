<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumosModel;
use App\empleadoModel;
use App\comprasModel;


class comprasController extends Controller
{
    public function altaCompra  (Request $request) {
        $compra = new comprasModel;

        $compra -> proveedor = $request->get('selectProveedor');
        $compra -> categoria = $request->get('selectCategoria');
        $compra -> nombreProducto = $request->get('selectProductoNombre');
        $compra -> precioUnitario = $request->get('selectPrecioUnitario');
        $compra -> moneda = $request->get('selectMoneda');
        $compra -> cantidad = $request->input('inputCantidad');
        $compra -> empleado = $request->get('selectVendedor');
        $compra -> habilitado = false;
        $compra -> save();

       
        

        return redirect('historialDeCompra');
        
    
    }


    
    public function cargarDatosCompra(){
       
            $empleados = empleadoModel::all();
            $producto = insumosModel::all();
    
            $datos = [$producto, $empleados];
    
            return view('compra',['datos' => $datos]);
        
    
    }

    public function listarHistorialCompra () {
        $compra = comprasModel::all();

        return view('historialDeCompra',['compras' => $compra]);

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
 





}
