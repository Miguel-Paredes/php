<?php
    $fecha1 = "2021/11/29";
    $numeros = "Uno Dos Tres Cuatro Cinco Seis Siete Ocho";

    $array_string = explode("/",$fecha1);
    for($i=0 ; $i<count($array_string) ; $i++){
        echo $array_string[$i]."<br>";
    }
    echo "<br>Usando delimitador<br>";
    $array_string = explode(" ",$numeros,4);
    for($i=0 ; $i<count($array_string) ; $i++){
        echo $array_string[$i]."<br>";
    }
    echo "<br>Usando delimitador negativo<br>";
    $array_string = explode(" ",$numeros,-1);
    for($i=0 ; $i<count($array_string) ; $i++){
        echo $array_string[$i]."<br>";
    }