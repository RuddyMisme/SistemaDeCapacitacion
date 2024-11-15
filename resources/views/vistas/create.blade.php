<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>aqui es para crear usuario</h1>
    <h1>Formulario para crear un nuevo Usuario</h1>
    <form action="/user" method="POST">
        @csrf
        <label>
            Nombre de Usuario
            <input type="text" name="nombre_usuario">
        </label>
        <br>
        <br>
        <label>
            Contraseña
            <input type="password" name="contrasena">
        </label>
        <br>
        <br>
        <label>
            Nombre 
            <input type="text" name="nombre">
        </label>
        <br>
        <br>
        <label>
            Apellido Paterno
            <input type="text" name="apellido_p">
        </label>
        <br>
        <br>
        <label>
            Apellido Materno
            <input type="text" name="apellido_m">
        </label>
        <br>
        <br>
        <label>
            Carnet
            <input type="text" name="carnet">
        </label>
        <br>
        <br>
        <label>
            Fecha de Nacimiento
            <input type="text" name="fecha_nac">
        </label>
        <br>
        <br>
        <label>
            Correo
            <input type="text" name="correo">
        </label>
        <br>
        <br>
        <label>
            Telefono
            <input type="text" name="telefono">
        </label>
        <br>
        <br>
        <label>
            Roll
            <input type="text" name="nombre_rol">
        </label>
        <br>
        <br>
        <label>
            Area
            <input type="text" name="nombre_area">
        </label>
        <br>
        <br>
        <button type="submit">
            Subir Datos
        </button>

    </form>

</body>
</html>