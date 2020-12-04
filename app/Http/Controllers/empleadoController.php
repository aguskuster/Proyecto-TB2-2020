<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleadoModel;
class empleadoController extends Controller
{
    
    
    public function altaEmpleado (Request $request){

        $empleado = new empleadoModel;

        $empleado -> ci = $request->input('ci');
        $empleado -> nombre = $request->input('nombre');
        $empleado -> apellido = $request->input('apellido');
        $empleado -> edad = $request->input('edad');
        $empleado -> email = $request->input('email');
        $empleado -> telefono = $request->input('telefono');
        
        $empleado -> save();

        
        return view('formulariosAlta/altaEmpleado', ['empleadoCreado' => $empleado]);
       
    }



    public function listarEmpleados () {
        $empleados = empleadoModel::all();

        return view('empleado', ['empleados' => $empleados]);
    }



    public function listarEmpleado () {
        $empleado = empleadoModel::all();

        return view('empleado', ['empleado' => $empleado]);
    }

    public function modificarEmpleado(Request $request){
        $e = empleadoModel::find($request->input('id'));

        $e->nombre = $request->input('nombre');
        $e->apellido = $request->input('apellido');
        $e->edad = $request->input('edad');
        $e->telefono = $request->input('telefono');
        $e->email = $request->input('email');

        $e->save();
        
        $empleado = empleadoModel::all();
        
        

        return view('empleado',['empleados' => $empleado]);


    }

    public function listarEmpleadoParaModificar( $id){
        $empleado = empleadoModel::where('id',$id)->first();
        return view('formulariosModificar/modificarEmpleado', ['empleadoSeleccionado' => $empleado]);
    }
}