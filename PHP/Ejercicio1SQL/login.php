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
            $sqlQuery = "select * from Ejercicio1.usuarios;";
            $muestra = mysqli_query($conexion,$sqlQuery);
            // enviamos la query que inserta el usuario y el password
            if($muestra){
                $numFilas = mysqli_query($conexion,"Select COUNT(*) from Ejercicio1.usuarios;");
                $contadorFilas = 0;
                while ($fila = mysql_fetch_assoc($muestra)){
                    if ($fila['usuario'] == $usuario && $fila['password'] == $contrasenya){
                        echo "<h1>Bienvenido ".$usuario."</h1>";
                    }
                    elseif ($fila['usuario'] == $usuario && $fila['password'] != $contrasenya){
                        echo "<h1>Contraseña incorrecta</h1>";
                        echo "<a href=\"index.php\">Reintentar</a>";
                    }
                    elseif ($fila['usuario'] != $usuario && $fila['password'] != $contrasenya && $contadorFilas == $numFilas){
                        echo "<h1>El usuario no existe</h1>";
                        echo "<a href=\"index.php\">Reintentar</a>";
                    }
                    $contadorFilas++;
                }

            }
            else{
                echo "<h1>Error: " . $sqlQuery . "<br>" . mysqli_error($conexion)."</h1>";
            }
        mysqli_close($conexion);
        }
    ?>
</body>
</html>