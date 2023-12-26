<html lang="en">
<head>
<style>
    body{
        background-color: black;
        color: white;
    }
</style>
</head>
<?php
    include "espacios.php";
    echo "metodo POST";
    echo $_POST ['nombre'];
    echo $_POST ['asignatura'];
    echo $_POST ['fruta'];
    echo "metodo GET";
    echo $_GET ['nombre'];
    echo $_GET ['asignatura'];
    echo $_GET ['fruta'];
    foreach($_POST['asignaturas'] as $valores){
        echo $valores;
    }
    $frutas = $_POST['frutas'];
    foreach($frutas as $valores){
        echo $valores;
    }
    ?>
</html>