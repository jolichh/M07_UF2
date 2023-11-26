<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LLISTA CENTRES</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>ADDRESS</td>
            <td>CP</td>
            <td>CITY</td>     
        </tr>
        @foreach ($centres as $nombre => $datos)
            <tr>
                <td>{{ $nombre }}</td>
                <td>{{ $datos['name'] }}</td>
                <td>{{ $datos['address'] }}</td>
                <td>{{ $datos['cp'] }}</td>
                <td>{{ $datos['city'] }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('admin') }}">Admin vista</a>
</html>