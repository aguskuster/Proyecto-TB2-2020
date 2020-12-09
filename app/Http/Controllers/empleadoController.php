<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleadoModel;
use Closure;
use Illuminate\Support\Facades\Auth;


class empleadoController extends Controller
{
    public function autenticarEmpleado(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        else{
            return view('login',['error' => "true"]);
        }
    }














    function validateAllInput(Request $request) {
        return $request->validate([
            'ci'=>'size:8|required',
            'nombre'=>'required',
            'apellido'=>'required',
            'edad'=>'required',
            'telefono'=>'required|min:8|max:9',
            'email'=>'required',
            'contrasenia' => 'required|min:7|max:30'
          
        ]);
       
       }
     



    
        
   

    public function altaEmpleado (Request $request){

        self::validateAllInput($request);

        $buscar = empleadoModel::where('ci',$request->input('ci'))->first(); 
        
        if ($buscar){
            echo "<script>alert('La cedula ingresada esta repetida') </script>";
            return view('formulariosAlta/altaEmpleado');
        } else {
           
            $empleado = new empleadoModel;

            $empleado -> ci = $request->input('ci');
            $empleado -> contrasenia = $request->input('contrasenia');
            $empleado -> nombre = $request->input('nombre');
            $empleado -> apellido = $request->input('apellido');
            $empleado -> edad = $request->input('edad');
            $empleado -> email = $request->input('email');
            $empleado -> telefono = $request->input('telefono');
            
            $empleado -> save();
    
            
            return view('formulariosAlta/altaEmpleado', ['empleadoCreado' => $empleado]);
        }
        

        

       
       
    }



    public function listarEmpleados () {
        $empleados = empleadoModel::all();

        return view('empleado', ['empleados' => $empleados]);
    }



 

    public function modificarEmpleado(Request $request){
        self::validateAllInput($request);

        

        $e = empleadoModel::find($request->input('id'));
       
        $e -> contrasenia = $request->input('contrasenia');
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







    public function listarEmpleadoParaEliminar($id){
        $empleado = empleadoModel::where('id',$id)->first();
        return view('formulariosBaja/bajaEmpleado', ['EmpleadoSeleccionadoEliminar' => $empleado]);
    }


    public function eliminarEmpleado(Request $request){
        $e = empleadoModel::find($request->input('id'));
        $e->delete();
      
        $empleado = empleadoModel::all();

        return view('empleado',['empleados' => $empleado]);

    }


}
