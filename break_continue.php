<?php
    $c = 1;
    while($c<=20){
        echo $c."<br>";
        if($c==10){
            break;
        }
        $c++;
    }
    $pc = ["SO","SSD","GPU","RAM","CPU"];
    foreach($pc as $valores){
        if($valores=="GPU"){
            continue;
        }
        echo $valores."<br>";
    }
    for ($i = 0; $i <= 20; $i++){
        if($i == 10){
            continue;
        }
        echo $i."<br>";
    }
    $c = 1;
    while($c<=20){
        if($c==10){
            $c++;
            continue;
        }
        echo $c."<br>";
        $c++;
    }