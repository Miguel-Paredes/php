<?php
    // Si no existe el archivo se sigue ejecutando
    echo "INCLUDE <br>";
    include ("bucles.php");
    include "bucles.php";
    echo "<br>";
    // Si no existe el archivo no se ejecuta
    echo "REQUIRE <br>";
    require "bucles.php";
    
    // Si ya se ejecuto el archivo no se repite
    echo "REQUIRE_ONCE <br>";
    require_once "bucles.php";
    echo "INCLUDE_ONCE <br>";
    include_once "bucles.php";