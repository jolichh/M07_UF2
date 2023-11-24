<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Alta usuari</title>
</head>
<body>
    <form method="POST" action="../crear_user/altaUsuari.php">
        <h1>Registre d'usuari</h1>
        <div >
            <label>ID</label><br>
            <input type="number" name="id" required>
        </div>
        <div >
            <label>Rol</label><br>
            <select id="'rol" name="rol">
                <option>Alumnat</option>
                <option>Professorat</option>
            </select>
        </div>
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div >
            <label>Surname</label><br>
            <input type="text" name="surname">
        </div>
        <div >
            <label>Password</label><br>
            <input type="password" name="password">
        </div>
        <div >
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <div >
            <label>Active</label><br>
            <select id="'active" name="active">
                <option>Si</option>
                <option>No</option>
            </select>
        </div>
        <button type="submit" name="send">Enviar</button>
    </form>
    <a href="{{ route('signin2') }}">Iniciar sessió</a>
</body>
</html>