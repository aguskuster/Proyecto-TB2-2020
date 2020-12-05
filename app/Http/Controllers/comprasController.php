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
}
