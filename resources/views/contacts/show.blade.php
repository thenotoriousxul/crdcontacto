<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles del Contacto</title>
</head>
<body>
<h1>Detalles del Contacto</h1>

<p><strong>Nombre:</strong> {{ $contact->nombre }}</p>
<p><strong>Apellido paterno:</strong> {{ $contact->apellido_paterno }}</p>
<p><strong>Apellido materno:</strong> {{ $contact->apellido_materno }}</p>
<p><strong>Teléfono:</strong> {{ $contact->telefono }}</p>
<p><strong>Edad:</strong> {{ $contact->edad }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>

<a href="{{ route('contacts.index') }}">Volver a la lista de contactos</a>
<a href="{{ route('contacts.edit', $contact) }}">Editar</a>

<form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
</body>
</html>
