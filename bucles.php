<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:50%;
        }
    </style>
</head>
<body>
    <center>
        <table>
            <tr>
                <td>
                    <?php
                        echo "BUCLE WHILE <BR>";
                        $contador = 1;
                        while($contador<=20){
                            echo $contador."<br>";
                            $contador++; 
                        }
                    ?>
                </td>
                <td>
                    <?php
                        echo "BUCLE DO WHILE <BR>";
                        $contador = 20;
                        do{
                            echo $contador."<br>";
                            $contador--;
                        }while($contador>0);
                    ?>
                </td>
                <td>
                    <?php
                        echo "BUCLE FOR <BR>";
                        for($contador = 1; $contador <= 20; $contador++){
                            echo $contador."<br>";
                        }
                    ?>
                </td>
                <td>
                    <?php
                        echo "BUCLE FOR EACH <BR>";
                        $laptop = ["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];
                        $frutas = [
                            "Fresas"=>100,
                            "Peras"=>30,
                            "Sandias"=>10,
                            "Melocotones"=>17,
                            "Manzanas"=>9
                        ];
                        echo "<br>Bucle solo con valores <br>";
                        foreach($laptop as $valor){
                            echo $valor."<br>";
                        }
                        echo "<br>Bucle solo con valores y clave <br>";
                        foreach($frutas as $clave => $valor){
                            echo $clave." - ".$valor."<br>";
                        }
                        $productos = [
                            ["codigo"=>"A001","descripcion"=>"Mouse"],
                            ["codigo"=>"A002","descripcion"=>"Teclado"],
                            ["codigo"=>"A003","descripcion"=>"Monitor"],
                            ["codigo"=>"A004","descripcion"=>"Impresor"]
                        ];
                        foreach($productos as $pd){
                            echo $pd["codigo"]." - ".$pd["descripcion"]."<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>