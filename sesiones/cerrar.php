<?php
    session_name("LOGIN");
    session_start();
    session_destroy();

    if(headers_sent()){
        echo "<script> window.location.href='contador.php'</script>";            
    }else{
        header("Location: contador.php");
    }