<?php
    session_name("LOGIN");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario">
        <br>
        <label>Clave</label>
        <input type="password" name="clave">
        <br>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>