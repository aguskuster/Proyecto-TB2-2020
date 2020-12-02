<?php

namespace App\Http\Controllers;


use App\PersonaModel;
use Illuminate\Http\Request;

class personaController extends Controller
{
   /*  public function crearPersona ($nombre, $apellido , $correo){

        $personaInstance = new PersonaModel;

        $personaInstance -> nombre = $nombre;
        $personaInstance -> apellido = $apellido;
        $personaInstance -> correo = $correo;

        $personaInstance -> save();

        return view('/mostrarPersonas', ['user' => $nombre]); 
        
    } */

    public function crear(Request $request){
        $p = new personaModel;

        $p -> nombre = $request->input('nombre');
        $p -> apellido = $request->input('apellido');
        $p -> mail = $request->input('mail');

        $p -> save();


        return view('creado', ['nombre' => $request->input('nombre'), 'apellido' => $request->input('apellido')]);

    }
}
