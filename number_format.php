<?php
    $val1 = 123456789.7654;
    // Coloca separador de unidades
    echo number_format($val1);
    // Coloca separador de unidades y decimales
    echo number_format($val1,2);
    // Coloca separador de unidades y decimales; elejimos el separador de decimales y el separador de unidades
    echo number_format($val1,2,".","");