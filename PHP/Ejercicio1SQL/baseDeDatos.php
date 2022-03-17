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
        $servidor = "localhost";
        $usuario = $_POST['nombre'];
        $contrasenya = $_POST['contrasenya'];

        $usuarioBD = "userEj1";
        $contrasenyaBD = "1234";
        $nombreBD = "Ejercicio1";
        $nombreTablaBD = "usuarios";
        // Crear conexión con base de datos
        $conn = mysqli_connect($servidor, $usuarioBD, $contrasenyaBD, $nombreBD);
        // Check connection
        if(!$conn){
            // die() frena la ejecución de código PHP
            die("Conexión fallida: ". mysql_error_message());
        }
        $sql = "insert into ".$nombreTablaBD." values ('".$usuario."','".$contrasenya."');";
        if(mysqli_query($conn, $sql)){
            echo "Datos insertados correctamente";
        }
        mysqli_close($conn);
        echo "<a href=\"index.php\">Volver</a>"
    ?>
</body>
</html>