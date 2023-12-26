<?php
    echo hash("md5",$clave);
    echo md5($clave);
    echo hash("sha1",$clave);
    echo sha1($clave);
    foreach(hash_algos() as $valores){
        echo $valores." - ".hash($valores, $clave);
    }
    echo password_hash($clave,PASSWORD_DEFAULT);
    echo password_hash($clave,PASSWORD_BCRYPT,["cost"=>10]);
    $clave = "HolaMundo123";
    $clave1 = "12345678";
    $clave_procesada = password_hash($clave,PASSWORD_BCRYPT,["cost"=>11]);
    echo password_verify($clave,$clave_procesada) ? "Clave correcta" : "Clave incorrecta";
    echo password_verify($clave1,$clave_procesada) ? "Clave correcta" : "Clave incorrecta";