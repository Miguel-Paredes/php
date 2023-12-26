<?php
    $cadena_texto = "hola mi nombre es Miguel Paredes";
    // Texto en minuscula
    echo "Funcion strtolower <br>".strtolower($cadena_texto);
    echo "<br>";
    echo "<br>";
    // Texto en mayuscula
    echo "Funcion strtoupper <br>".strtoupper($cadena_texto);
    echo "<br>";
    echo "<br>";
    // Primera letra en mayuscula
    echo "Funcion ucfirst <br>".ucfirst($cadena_texto);
    echo "<br>";
    echo "<br>";
    // Cada primera letra en mayuscula
    echo "Funcion ucwords <br>".ucwords($cadena_texto);
    echo "<br>";
    echo "<br>";

    // Caracteres de un string
    $longitud = strlen($cadena_texto);
    echo "Caracteres de un string <br>".$longitud;
    echo "<br>";
    echo "<br>";

    // Contar palabras
    $palabras = str_word_count($cadena_texto);
    echo "Contar palabras <br>".$palabras;
