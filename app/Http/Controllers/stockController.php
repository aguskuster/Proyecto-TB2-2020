<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comprasModel;
use App\stockModel;


class stockController extends Controller
{
    public function listarStockParaHabilitar(){
        $comprasHabilitadoFalse = comprasModel::where('habilitado',false)->get();


        return view('formulariosAlta/altaStock',['habilitarStock' => $comprasHabilitadoFalse]);
    }


    public function altaStock($id){
        $h = comprasModel::find($id);
        
        $h -> habilitado = true;

        $h->save();

        $resultado = self::listarStockParaHabilitar();
        return $resultado;
    }

    public function listarStock(){
        $stockHabilitado = comprasModel::where('habilitado',true)->get();


        return view('stock',['stockHabilitado' => $stockHabilitado]);
    }


 

    public function modificarStock(Request $request){
      

        $s = stockModel::find($request->input('id'));

        $s->proveedor = $request->input('proveedor');
        $s->categoria = $request->input('categoria');
        $s->nombreProducto = $request->input('nombreProducto');
        $s->precioUnitario = $request->input('precioUnitario');
        $s->moneda = $request->input('moneda');
        $s->cantidad = $request->input('cantidad');
        $s->save();

        $stock = stockModel::all();
        
        $resultado = self::listarStock();
        return $resultado;

    }

    public function listarStockParaModificar($id){
        $stock = stockModel::where('id',$id)->first();
        return view('formulariosModificar/modificarStock', ['StockSeleccionadoModificar' => $stock]);
    }


    public function listarStockParaEliminar($id){
        $stock = stockModel::where('id',$id)->first();
        return view('formulariosBaja/bajaStock', ['StockSeleccionadoEliminar' => $stock]);
    }


    public function eliminarStock(Request $request){
        $s = stockModel::find($request->input('id'));
        $s->delete();
      
        $stock = stockModel::all();

        $resultado = self::listarStock();
        return $resultado;

    }

    public function listarInfoStock(){
        
    }

}
