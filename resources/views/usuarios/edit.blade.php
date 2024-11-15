@extends('layouts.app-layout')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre de Usuario:</label>
        <input type="text" name="nombre_usuario" value="{{ $usuario->nombre_usuario }}" required>

        <label>Contraseña (Dejar vacío si no deseas cambiarla):</label>
        <input type="password" name="contrasena">

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}" required>

        <label>Apellido Paterno:</label>
        <input type="text" name="apellido_p" value="{{ $usuario->apellido_p }}" required>

        <label>Apellido Materno:</label>
        <input type="text" name="apellido_m" value="{{ $usuario->apellido_m }}" required>

        <label>Carnet:</label>
        <input type="text" name="carnet" value="{{ $usuario->carnet }}" required>

        <label>Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nac" value="{{ $usuario->fecha_nac }}" required>

        <label>Correo:</label>
        <input type="email" name="correo" value="{{ $usuario->correo }}" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="{{ $usuario->telefono }}">

        <label>Nombre del Rol:</label>
        <input type="text" name="nombre_rol" value="{{ $usuario->nombre_rol }}" required>

        <label>Nombre del Área:</label>
        <input type="text" name="nombre_area" value="{{ $usuario->nombre_area }}" required>

        <button type="submit">Actualizar</button>
    </form>
@endsection
