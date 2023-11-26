<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LLISTA ALUMNAT</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>SURNAME</td>
            <td>ROL</td>
            <td>EMAIL</td>     
        </tr>
        @foreach ($alumnes as $nombre => $datos)
            <tr>
                <td>{{ $datos['id'] }}</td>
                <td>{{ $nombre }}</td>
                <td>{{ $datos['surname'] }}</td>
                <td>{{ $datos['Rol'] }}</td>
                <td>{{ $datos['email'] }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('admin') }}">Admin vista</a>
</body>
</html>