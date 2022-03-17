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
        $A=$_GET['A'];
        $B=$_GET['B'];
        $C=$_GET['C'];
        $operacion1=(-$B+sqrt($B**2 - 4*$A*$C))/(2*$A);
        $operacion2=(-$B-sqrt($B**2 - 4*$A*$C))/(2*$A);
        echo $A."*x^2+".$B."*x+".$C."=";
        if (($B**2 - 4*$A*$C) < 0){
            echo "No tiene solución";
        }
        else{
            echo $operacion1;
            echo " o ";
            echo $operacion2;
        }
    ?>
</body>
</html>