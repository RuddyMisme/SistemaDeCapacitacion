@extends('layouts.app-layout')

@section('content')
    <h1>Detalles del Usuario</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre de Usuario: {{ $usuario->nombre_usuario }}</h5>
            <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
            <p><strong>Apellido Paterno:</strong> {{ $usuario->apellido_p }}</p>
            <p><strong>Apellido Materno:</strong> {{ $usuario->apellido_m }}</p>
            <p><strong>Carnet:</strong> {{ $usuario->carnet }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $usuario->fecha_nac }}</p>
            <p><strong>Correo:</strong> {{ $usuario->correo }}</p>
            <p><strong>Teléfono:</strong> {{ $usuario->telefono }}</p>
            <p><strong>Rol:</strong> {{ $usuario->nombre_rol }}</p>
            <p><strong>Área:</strong> {{ $usuario->nombre_area }}</p>
        </div>
    </div>

    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver a la Lista</a>
    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar Usuario</a>
@endsection
