<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    <style>
        p {
            color: <?php echo $_POST['colorForm'];?>
        }
    </style>
</head>
<body>
    <?php
        echo "<h1>El tamaño del texto introducido es ".strlen($_POST['txt'])."</h1>";
        if (strlen($_POST['txt'])%2 == 0){
            echo "<h3>La longitud del texto es par</h3>";
        }
        else{
            echo "<h3>La longitud del texto es impar</h3>";
        }
        for ($i=0; $i<$_POST['num']; $i++){
            if (strlen($_POST['txt'])%2 == 0){
                echo "<p><b>".$_POST['txt']."</b></p>";
            }
            else{
                echo "<p>".$_POST['txt']."</p>";
            }
                
        }
    ?>
</body>
</html>