<?php
    function ola (){
        echo "Hola";
    }
    // ola();
    // echo "<br>";
    function hola ($nombre){
        echo "Hola ".$nombre;
    }
    // hola("Juan");
    function promedio($val1,$val2,$val3){
        $resultado=($val1+$val2+$val3)/3;
        return $resultado;
    }