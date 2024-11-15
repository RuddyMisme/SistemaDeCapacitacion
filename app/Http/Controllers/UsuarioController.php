<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function usuario()   
    {

        $usu = Usuario::all();
        return view('vistas.usuario',compact('usu'));

    }

    public function create()   
    {

       
        return view('vistas.create');

    }

    public function store(Request $request)
    {
        // return $request->all();

        $post = new Usuario();

        $post->nombre_usuario = $request->nombre_usuario;
        $post->contrasena = $request->contrasena;
        $post->nombre = $request->nombre;
        $post->apellido_p = $request->apellido_p;
        $post->apellido_m = $request->apellido_m;
        $post->carnet = $request->carnet;
        $post->fecha_nac = $request->fecha_nac;
        $post->correo = $request->correo;
        $post->telefono = $request->telefono;
        $post->nombre_rol = $request->nombre_rol;
        $post->nombre_area = $request->nombre_area;

        $post->save();

        return redirect('/user');

    }

    public function show($user)
    {
        return view('vistas.show', compact('user'));

    }
}
