<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:40%;
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
                        for($contador = 1; $contador <= 20; $contador++){
                            echo $contador."<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>