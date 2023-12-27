<?php
    if(!preg_match("/^[a-zA-Z]{3,10}$/",$_POST['usuario'])){
        echo "El usuario no coincide con el formato solicitado";
        exit();
    }
    if(!preg_match("/^[a-zA-Z0-9]{4,30}$/",$_POST['clave'])){
        echo "La contraseña no coincide con el formato solicitado";
        exit();
    }
    
    if($_POST['usuario'] == "Miguel" && $_POST['clave'] == "12345"){
        session_name("LOGIN");
        session_start();
        $_SESSION["Nombre"] = "Miguel";
        $_SESSION["Apellido"] = "Paredes";
        $_SESSION["Pais"] = "Ecuador";
        if(headers_sent()){
            echo "<script> window.location.href='contador.php'</script>";            
        }else{
            header("Location: contador.php");
        }
    }else{
        echo ucfirst("Datos incorrectos");
    }