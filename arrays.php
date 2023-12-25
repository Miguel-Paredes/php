<?php
    // Arrays de tipo escalar
    $estudiantes = array("Miguel","Angel","Allison","Cristian");
    $Estudiantes = ["Miguel","Angel","Allison","Cristian",14];

    // Arrays de tipo asociativo
    $tutor = [
        "nombre"=>"Miguel",
        "apellido"=>"Paredes"
        ,"edad"=>20
    ];
    echo $tutor["nombre"];
    // Arrays de tipo multiplesdimensiones
    $tutor2 = [
        "nombre"=>"Miguel",
        "apellido"=>"Paredes",
        "edad"=>20,
        "cursos"=>["PHP","GIT","GITHUB"]
    ];
    // Agregar valores al array
    $tutor2["pais"]="Ecuador";
    echo $tutor2["cursos"][0];
    echo $tutor2["pais"];
    
    // Contar elementos de un array
    echo count($estudiantes);
    echo count($tutor);
    echo count($tutor2);

    // Contar elementos de un array multidimensional
    echo count($tutor2, COUNT_RECURSIVE);