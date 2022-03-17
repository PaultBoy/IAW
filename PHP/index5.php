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
        $arr = array();
        for($i=0;$i<=9;$i++){
            $k=$i+1;
            $x = $num*$k;
            $x = $x-2;
            $cart[$i] = $x;
            echo $num."*".$k."=".$cart[$i];
            echo "<br/>";
        }
    }
    tablaMultiplicar(5);
    ?>
</body>
</html>