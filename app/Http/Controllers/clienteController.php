<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clienteModel;
class clienteController extends Controller
{
    function validateAllInput(Request $request) {
        return $request->validate([
            'rut'=>'size:12|required',
            'empresa'=>'required',
            'telefono'=>'required|min:8|max:9',
            'email'=>'required',
        ]);
       
       }
     
    
    public function altaCliente (Request $request){
        self::validateAllInput($request);

        $buscar = clienteModel::where('rut',$request->input('rut'))->first(); 
        
        if ($buscar){
            echo "<script>alert('El rut ingresado esta repetido') </script>";
            return view('formulariosAlta/altaCliente');
        } else {

        $cliente = new clienteModel;

        $cliente -> rut = $request->input('rut');
        $cliente -> empresa = $request->input('empresa');
        $cliente -> telefono = $request->input('telefono');
        $cliente -> email = $request->input('email');
        
        $cliente -> save();

        
        return view('formulariosAlta/altaCliente', ['clienteCreado' => $cliente]);
       
        }
    }   



    public function listarClientes () {
        $clientes = clienteModel::all();

        return view('cliente', ['clientes' => $clientes]);
    }


    public function modificarCliente(Request $request){

        self::validateAllInput($request);
        $p = clienteModel::find($request->input('id'));

        
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
 
    
    public function listarClienteParaEliminar($id){
        $cliente = clienteModel::where('id',$id)->first();
        return view('formulariosBaja/bajaCliente', ['clienteSeleccionadoEliminar' => $cliente]);
    }


    public function eliminarCliente(Request $request){
        $c = clienteModel::find($request->input('id'));
        $c->delete();
      
        $clientes = clienteModel::all();

        return view('cliente',['clientes' => $clientes]);

    }

}
