@extends('layouts.app-layout')

@section('content')
    <h1>Crear Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label>Nombre de Usuario:</label>
        <input type="text" name="nombre_usuario" required>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" required>

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Apellido Paterno:</label>
        <input type="text" name="apellido_p" required>

        <label>Apellido Materno:</label>
        <input type="text" name="apellido_m" required>

        <label>Carnet:</label>
        <input type="text" name="carnet" required>

        <label>Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nac" required>

        <label>Correo:</label>
        <input type="email" name="correo" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono">

        <label>Nombre del Rol:</label>
        <input type="text" name="nombre_rol" required>

        <label>Nombre del Área:</label>
        <input type="text" name="nombre_area" required>

        <button type="submit">Guardar</button>
    </form>
@endsection
