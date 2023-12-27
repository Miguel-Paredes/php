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
    <?php echo "Hola ".$_SESSION['Nombre'];?>
    <br><br>
    <a href="index.php">Inicio</a>
    <br>
    <a href="cerrar.php">Eliminar sesion</a>
</body>
</html>