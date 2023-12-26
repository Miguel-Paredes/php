<?php
    date_default_timezone_set("America/Guayaquil");
    echo date("d");
    echo date("l");
    echo date("F");
    $fecha_date = date("Y");
    echo $fecha_date;
    $fecha_date = date("Y-m-d");
    echo $fecha_date;
    $fecha_date = date("d-m-Y");
    echo $fecha_date;
    $fecha_date = date("l d F Y");
    echo $fecha_date;
    $hora = date("h:i a");
    echo $hora;