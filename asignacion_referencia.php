<?php
    $texto = "Ecuador";
    // Almacena la informacion como una constante
    $var1 = $texto;
    // Almacena la informacion de texto asi se modifique en la ejecucion
    $var2 = &$texto;

    echo "Varibale 1 {$var1} ";
    echo "Variable 2 {$var2} ";
    $texto = "Miguel Paredes";
    echo "Varibale 1 {$var1} ";
    echo "Variable 2 {$var2} ";