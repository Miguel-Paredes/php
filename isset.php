<?php
    include "espacios.php";
    $numero = NULL;
    $numero1;
    // Eliminar variable
    $numero2 = "9";
    unset($numero2);
    echo "Metodo unset";
    echo (is_null($numero2)) ? "Variable NULL" : "Variable con valor";
    s();
    echo (is_null($numero)) ? "Variable NULL" : "Variable con valor";
    s();
    echo (is_null($numero1)) ? "Variable NULL" : "Variable con valor";
    s();
    s();
    echo "Metodo empty";
    s();
    $val1 = "9";
    $val2 = "";
    echo (empty($val1)) ? "Variable vacia" : "No esta vacia";
    s();
    echo (empty($val2)) ? "Variable vacia" : "No esta vacia";
    s();
    $val3 = $_GET['numero'];
    echo (empty($val3)) ? "Variable vacia" : "No esta vacia";
    s();
    echo (isset($val2)) ? "Variable definida" : "Variable no definida";
    unset($val2);
    s();
    echo (isset($val2)) ? "Variable definida" : "Variable no definida";
?>