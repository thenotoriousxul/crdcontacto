<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Contacto</title>
</head>
<body>
<h1>Crear Contacto</h1>
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Apellido paterno:</label>
    <input type="text" name="apellido_paterno" required>

    <label>Apellido materno:</label>
    <input type="text" name="apellido_materno" required>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required>

    <label>Edad:</label>
    <input type="text" name="edad" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <button type="submit">Guardar</button>
</form>
</body>
</html>
