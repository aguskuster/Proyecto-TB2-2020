<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumosModel;
use App\empleadoModel;
use App\comprasModel;
use App\carritoModel;


class comprasController extends Controller
{
    
    /* public function altaCompra  (Request $request) {
       
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


    public function agregarCompraTabla (Request $request){
        
        $proveedor = $request->get('selectProveedor');
        $categoria = $request->get('selectCategoria');
        $nombreProducto = $request->get('selectProductoNombre');
        $precioUnitario =  $request->get('selectPrecioUnitario');
        $moneda = $request->get('selectMoneda');
        $cantidad = $request->input('inputCantidad');

        $articulo = [ $proveedor, $categoria, $nombreProducto, $precioUnitario, $moneda , $cantidad];
        
        $empleados = empleadoModel::all();
        $producto = insumosModel::all();

        $datos = [$producto, $empleados];

        return view('compra',['articulo'=>$articulo],['datos' => $datos],);

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
 

 */
    public function cargarDatosCompra(){
       
        $empleados = empleadoModel::all();
        $producto = insumosModel::all();
        $datos = [$producto, $empleados];
        

         return view('compra',[ 'empleados' => $empleados,'producto' => $producto,]);
         


    }

    public function buscarMarca(Request $request){
        
        $listaDeProductos = insumosModel::where('marca','LIKE','%'.$request->get('selectProveedor').'%', 'AND','categoria','LIKE','%'.$request->get('selectCategoria').'%' )->get();
        
        $empleados = empleadoModel::all();
        $producto = insumosModel::all();
        

        
        return view('compra',[
            'empleados' => $empleados,
            'producto' => $producto,
            'prodFiltrado' => $listaDeProductos        
        ]);

        
    }


}
