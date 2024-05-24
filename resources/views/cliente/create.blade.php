<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cliente</title>
</head>
<body>
    <form action="{{ route('cliente.store') }}" method="post">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email"><br><br>
        <label for="telefono">Teléfono</label><br>
        <input type="text" name="telefono"><br><br>
        <label for="direccion">Dirección</label><br>
        <textarea name="direccion" cols="30" rows="5"></textarea><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
