<?php
    // Forma de definir constante antiguamente
    define("nombre","Miguel");
    echo nombre;
    // Forma moderna
    const Nombre = "Miguel";
    echo Nombre;
    // Forma de declarar array
    define("Alumnos", array(
        "Miguel",
        "Angel"
    ));
    echo Alumnos[1];
?>