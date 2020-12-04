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
}
