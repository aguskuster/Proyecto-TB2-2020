<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumosModel;

class insumosController extends Controller
{
    
    public function altaInsumo (Request $request){

        $insumo = new insumosModel;

        $insumo -> marca = $request->input('marca');
        $insumo -> categoria = $request->input('categoria');
        $insumo -> nombre = $request->input('nombre');
        $insumo -> precio = $request->input('precio');
        $insumo -> moneda = $request->input('moneda');
        
        $insumo -> save();

        
        return view('formulariosAlta/altaInsumo', ['insumoAgregado' => $insumo]);
       
    }

    public function listarInsumos () {
        $insumos = insumosModel::all();

        return view('insumos', ['insumos' => $insumos]);
    }




    public function modificarInsumo(Request $request){
        $i = insumosModel::find($request->input('id'));

        $i->marca = $request->input('marca');
        $i->categoria = $request->input('categoria');
        $i->nombre = $request->input('nombre');
        $i->precio = $request->input('precio');
        $i->moneda = $request->input('moneda');
        $i->save();

        $insumos = insumosModel::all();
        
        

        return view('insumos',['insumos' => $insumos]);


    }

    public function listarInsumoParaModificar($id){
        $insumos = insumosModel::where('id',$id)->first();
        return view('formulariosModificar/modificarInsumo', ['InsumoSeleccionadoModificar' => $insumos]);
    }







    public function listarInsumoParaEliminar($id){
        $insumos = insumosModel::where('id',$id)->first();
        return view('formulariosBaja/bajaInsumo', ['InsumoSeleccionadoEliminar' => $insumos]);
    }


    public function eliminarInsumo(Request $request){
        $i = insumosModel::find($request->input('id'));
        $i->delete();
      
        $insumos = insumosModel::all();

        return view('insumos',['insumos' => $insumos]);

    }


}
