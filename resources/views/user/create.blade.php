<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>

<body>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="password_confirmation">Confirmar contraseña:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>
