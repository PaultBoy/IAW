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
    $str1 = "pablito";
    $str2 = "juanito";
    $str3 = "carlitos";
    function varent($entrada){
        echo "Hola ".$entrada." como estas?"; 
    }
    function jumps(){
        $i = 0;
        while ($i < 4){
            echo '<br/>';
            $i++;
        }
    }
    varent($str3);
    jumps();
    varent(pepito);
    jumps();
    varent($str1);
    ?>
</body>
</html>