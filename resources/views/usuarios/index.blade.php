@extends('layouts.app-layout')

@section('content')
    <h1>Lista de Usuarios</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear Nuevo Usuario</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de Usuario</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Carnet</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Rol</th>
                <th>Área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id_usuario }}</td>
                    <td>{{ $usuario->nombre_usuario }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido_p }}</td>
                    <td>{{ $usuario->apellido_m }}</td>
                    <td>{{ $usuario->carnet }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>{{ $usuario->nombre_rol }}</td>
                    <td>{{ $usuario->nombre_area }}</td>
                    <td>
                        <a href="{{ route('usuarios.show', $usuario->id_usuario) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
