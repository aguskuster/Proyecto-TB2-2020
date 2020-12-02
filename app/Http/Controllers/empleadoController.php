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

        
        return view('formularios/altaEmpleado', ['empleadoCreado' => $empleado]);
       
    }



    public function listarEmpleados () {
        $empleados = empleadoModel::all();

        return view('empleado', ['empleados' => $empleados]);
    }
}