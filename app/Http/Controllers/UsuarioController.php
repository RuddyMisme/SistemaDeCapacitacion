<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));

    }

    
    public function create()
    {
        return view('usuarios.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'nombre_usuario' => 'required|string|max:255|unique:usuarios',
            'contrasena' => 'required|string|min:8',
            'nombre' => 'required|string|max:255',
            'apellido_p' => 'required|string|max:255',
            'apellido_m' => 'required|string|max:255',
            'carnet' => 'required|string|max:20|unique:usuarios',
            'fecha_nac' => 'required|date',
            'correo' => 'required|email|max:255|unique:usuarios',
            'telefono' => 'nullable|string|max:15',
            'nombre_rol' => 'required|string|max:255',
            'nombre_area' => 'required|string|max:255',
        ]);

        Usuario::create($request->all());
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_usuario)
    {
        $usuario = Usuario::findOrFail($id_usuario);
        return view('usuarios.show', compact('usuario'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_usuario)
    {
        $usuario = Usuario::findOrFail($id_usuario);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_usuario)
{
    // Validación de los campos
    $request->validate([
        'nombre_usuario' => 'required|string|max:255|unique:usuarios,nombre_usuario,' . $id_usuario,
        'contrasena' => 'nullable|string|min:8', 
        'apellido_p' => 'required|string|max:255',
        'apellido_m' => 'required|string|max:255',
        'carnet' => 'required|string|max:20|unique:usuarios,carnet,' . $id_usuario,
        'fecha_nac' => 'required|date',
        'correo' => 'required|email|max:255|unique:usuarios,correo,' . $id_usuario,
        'telefono' => 'nullable|string|max:15',
        'nombre_rol' => 'required|string|max:255',
        'nombre_area' => 'required|string|max:255',
    ]);

    // Encontrar el usuario por ID
    $usuario = Usuario::findOrFail($id_usuario);

    // Actualizar los campos
    $usuario->nombre_usuario = $request->nombre_usuario;

    // Solo actualizar la contraseña si se envía
    if ($request->filled('contrasena')) {
        $usuario->contrasena = bcrypt($request->contrasena);
    }

    $usuario->nombre = $request->nombre;
    $usuario->apellido_p = $request->apellido_p;
    $usuario->apellido_m = $request->apellido_m;
    $usuario->carnet = $request->carnet;
    $usuario->fecha_nac = $request->fecha_nac;
    $usuario->correo = $request->correo;
    $usuario->telefono = $request->telefono;
    $usuario->nombre_rol = $request->nombre_rol;
    $usuario->nombre_area = $request->nombre_area;

    $usuario->save();

    // Redirigir con un mensaje de éxito
    return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_usuario)
    {
        Usuario::destroy($id_usuario);
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente.');
    
    }
}
