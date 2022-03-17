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
        $conexion = mysqli_connect($servidor, $usuarioBD, $contrasenyaBD, $nombreBD);
        // función para implementar alert
        function alert($mensaje){
            echo "<script type=\"text/javascript\">alert(\"$mensaje\");</script>";
        }
        if(!$conexion){
            alert("Connection failed: " . mysqli_connect_error());
        }
        else{
            alert("Connected");
            $hashpass = password_hash($contrasenya, PASSWORD_DEFAULT);
            $sqlQuery = "insert into ".$nombreTablaBD." values ('".$usuario."','".$hashpass."');";
            // enviamos la query que inserta el usuario y el password
            if(mysqli_query($conexion, $sqlQuery)){
                echo "<h1>Datos insertados correctamente</h1>";
                $sql = "select * from Ejercicio1.usuarios;";
                $queryMostrar = mysqli_query($conexion, $sql);

                if (mysqli_num_rows($queryMostrar) > 0) {
                // output data of each fila
                    while($fila = mysqli_fetch_assoc($queryMostrar)) {
                    echo "Usuario: " . $fila["usuario"]. " - Contraseña: " . $fila["password"]."<br>";
                    }
                }
            }
            else{
                echo "<h1>Error: " . $sqlQuery . "<br>" . mysqli_error($conexion)."</h1>";
            }
        mysqli_close($conexion);
        echo "<a href=\"index.php\">Volver</a>";
        }
    ?>
</body>
</html>