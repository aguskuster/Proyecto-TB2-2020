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

        
        return view('formulariosAlta/altaCliente', ['clienteCreado' => $cliente]);
       
    }



    public function listarClientes () {
        $clientes = clienteModel::all();

        return view('cliente', ['clientes' => $clientes]);
    }


    public function modificarCliente(Request $request){
        $p = clienteModel::find($request->input('id'));

        $p->rut = $request->input('rut');
        $p->empresa = $request->input('empresa');
        $p->telefono = $request->input('telefono');
        $p->email = $request->input('email');

        $p->save();

        $clientes = clienteModel::all();
        
        

        return view('cliente',['clientes' => $clientes]);


    }

    public function listarClienteParaModificar($id){
        $cliente = clienteModel::where('id',$id)->first();
        return view('formulariosModificar/modificarCliente', ['clienteSeleccionado' => $cliente]);
    }
    
}
