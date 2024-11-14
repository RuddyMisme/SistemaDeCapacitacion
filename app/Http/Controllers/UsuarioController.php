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

        return $usu;
        return view('vistas.usuario');



    }
}
