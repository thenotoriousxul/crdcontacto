<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactos</title>
</head>
<body>
<h1>Contactos</h1>
<a href="{{ route('contacts.create') }}">Crear Contacto</a>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Teléfono</th>
        <th>Edad</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->nombre }}</td>
            <td>{{ $contact->apellido_paterno }}</td>
            <td>{{ $contact->apellido_materno }}</td>
            <td>{{ $contact->telefono }}</td>
            <td>{{ $contact->edad }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a href="{{ route('contacts.show', $contact) }}">Ver</a>
                <a href="{{ route('contacts.menor') }}">Ver contactos menores de 18 años</a>

                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
