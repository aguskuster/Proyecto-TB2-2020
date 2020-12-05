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


}
