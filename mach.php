<?php
    $a = 7;
    $x = 10;
    $y = 9;
    $z = 7;

    $resultado = match ($a) {
        $x => "Valor igual a x",
        $y => "Valor igual a y",
        $z => "Valor igual a z",
        default => "No coincide con ninguna variable",
    };
    $edad = 18;
    $resultado = match (true) {
        $edad >= 60 => "Eres de la tercera edad",
        $edad >= 30 => "Eres un adulto",
        $edad >= 18 => "Eres un adulto joven",
        default => "Eres un niño"
    };
    echo $resultado;