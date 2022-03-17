<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
        $txt = $_GET['texto'];
        $letra = $_GET['letra'];
        function cuentaLetras($let, $text){
            $numApar = 0;
            $posLetras = [];
            for ($i = 0; $i < strlen($text); $i++){
                if ($text[$i] == $let){
                    $posLetras[] = $i + 1;
                    $numApar++;
                }
            }
            echo $text;
            echo "<br>";
            echo "Número de letras: ".$numApar;
            echo "<br>";
            echo "Letra escogida: ".$let;
            echo "<br>";
            echo "Posiciones de las letras: ";
            for ($j = 0; $j < count($posLetras); $j++){
                if ($j == count($posLetras) - 1){
                    echo $posLetras[$j].".";
                }
                else{
                    echo $posLetras[$j].", ";
                }
            }
        }
        cuentaletras($letra, $txt);
    ?>
</body>
</html>