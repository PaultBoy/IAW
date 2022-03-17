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
    $total_compra = 55;
    $tipo_compra = "ropa";
    function transaccion($precio,$categoria){
        if($precio < 19){
            if($categoria == "ropa"){
                echo "Los gastos de envío son 9 euros";
                echo "<br/>";
            }
            elseif($categoria == "mascotas"){
                echo "No se puede realizar el envío";
                echo "<br/>";
            }
        }
        elseif($precio >= 19 and $precio <= 40){
            echo "Los gastos de envío son 9 euros";
            echo "<br/>";
        }
        elseif($precio > 40){
            echo "Los portes de envío son gratis";
            echo "<br/>";
            if($precio > 200){
                echo "Código de descuento: CODIGODESC33";
                echo "<br/>";
            }
        }
    }
    transaccion($total_compra,$tipo_compra);
    transaccion(10,"mascotas");
    transaccion(10,"ropa");
    transaccion(33,"mascotas");
    transaccion(250,"mascotas");
    ?>
</body>
</html>