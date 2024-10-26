<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactos Menores de 18 Años</title>
</head>
<body>
<h1>Contactos Menores de 18 Años</h1>
<a href="{{ route('contacts.index') }}">Volver a la lista de contactos</a>

<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Teléfono</th>
        <th>Edad</th>
        <th>Email</th>
    </tr>
    @foreach ($contactosMenores as $contact)
        <tr>
            <td>{{ $contact->nombre }}</td>
            <td>{{ $contact->apellido_paterno }}</td>
            <td>{{ $contact->apellido_materno }}</td>
            <td>{{ $contact->telefono }}</td>
            <td>{{ $contact->edad }}</td>
            <td>{{ $contact->email }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
