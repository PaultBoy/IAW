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
    $num1 = 3;
    $num2 = 4;
    $num3 = 5;
    $str1 = "hola";
    $str2 = "mundo";
    echo "<h1>".$str1." ".$str2."</h1><br/>";
    echo $num1 + $num2 + $num3;
    echo "<br/>";
    echo $num3 - $num2 - $num1;
    echo "<br/>";
    echo $num1 * $num2 * $num3;
    echo "<br/>";
    echo pow(($num1/$num2),$num3);
    ?>
</body>
</html>