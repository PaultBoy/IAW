<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function tablaMultiplicar($num){
        echo "Tabla de multiplicar del ".$num;
        echo "<br/>";
        echo "----------------------------------------";
        echo "<br/>";
        for($i=1;$i<=10;$i++){
            echo $num."*".$i."=".$num*$i;
            echo "<br/>";
        }
        echo "<br/>";
    }
    tablaMultiplicar(5);
    tablaMultiplicar(7);
    ?>
    
</body>
</html>