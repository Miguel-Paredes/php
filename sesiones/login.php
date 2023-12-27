<?php
    if($_POST['usuario'] == "Miguel" && $_POST['clave'] == "12345"){
        session_name("LOGIN");
        session_start();
        $_SESSION["Nombre"] = "Miguel";
        $_SESSION["Apellido"] = "Paredes";
        $_SESSION["Pais"] = "Ecuador";
        echo ucfirst("Sesion iniciada");
    }else{
        echo ucfirst("Datos incorrectos");
    }