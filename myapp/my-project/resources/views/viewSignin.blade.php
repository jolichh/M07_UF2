<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <h1>{{$resultado}}</h1>
    <form method="POST" action="../view/user.php">
        <div >
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <div >
            <label>Password</label><br>
            <input type="password" name="password">
        </div>
        <div>
            <label>
                <input type="checkbox" id="cbox1" value="false" /> 
                Remember me
            </label>
        </div>
        <button type="submit" name="send">Enviar</button><br>
        <a href="http://localhost:8000/joana/signup/crear/usuari/nou">Crea usuari</a>
    </form>
</body>
</html>