<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clienteModel;
class clienteController extends Controller
{
    
    
    public function altaCliente (Request $request){

        $cliente = new clienteModel;

        $cliente -> rut = $request->input('rut');
        $cliente -> empresa = $request->input('empresa');
        $cliente -> telefono = $request->input('telefono');
        $cliente -> email = $request->input('email');
        $cliente -> save();

        
        return view('formularios/altaCliente', ['clienteCreado' => $cliente]);
       
    }



    public function listarClientes () {
        $clientes = clienteModel::all();

        return view('cliente', ['clientes' => $clientes]);
    }
}
