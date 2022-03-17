<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <?php
        function resultadoDivision($dividendo, $divisor){
            $cociente = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
            echo "<h1>Cociente: $cociente, Resto: $resto</h1>";
        }
        
        function revstr($text){
            $textrev = "";
            for($i = 0; $i < strlen($text); $i++){
                $textrev[$i] = $text[strlen($text)-1-$i];
            }
            return $textrev;
        }
        function valorAbsoluto($num){
            if ($num >= 0){
                return $num;
            }
            else{
                return -$num;
            }
        }
        function contarPalabras($text){
            $wcount = 1;
            $lengthWords = [];
            $lcountPerWord=0;
            for ($i = 0; $i<strlen($text);$i++){
            $lcountPerWord++;
                if($text[$i] == " "){
                    $wcount++;
                    $lengthWords[]=$lcountPerWord;
                }
            }
            for ($i = 0; $i<strlen($text);$i++){
                echo $lengthWords[$i];
            }
            return $wcount;    
        }
        resultadoDivision($_GET['num1'], $_GET['num2']);
        echo "<br>";
        echo "<h1>El string inverso es el siguiente: <br>". revstr($_GET['txt'])."</h1>";
        echo "<br>";
        echo "<h1>El valor absoluto de ".$_GET['num1']." es: ".valorAbsoluto($_GET['num1'])."</h1>";
        echo "<br>";
        echo "<h1>El valor absoluto de ".$_GET['num2']." es: ".valorAbsoluto($_GET['num2'])."</h1>";
        echo "<br>";
        echo "<h1>El número de palabras del texto es: ".contarPalabras($_GET['txt'])."</h1>";
    ?>
</body>
</html>