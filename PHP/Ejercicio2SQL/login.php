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
                $numFilas = mysqli_query($conexion,"Select usuario from Ejercicio1.usuarios where usuario = '".$usuario."';");
                $numFilasFinal = mysqli_fetch_assoc($numFilas);
                if ($numFilasFinal['usuario'] == ""){
                    echo "<h1>El usuario no existe</h1>";
                }
                else{
                    $passwd = mysqli_query($conexion,"Select password from Ejercicio1.usuarios where usuario = '".$usuario."';");
                    $passwdFinal = mysqli_fetch_assoc($passwd);
                    if (password_verify($contrasenya,$passwdFinal['password'])){
                        echo "<h1>Bienvenido".$usuario."</h1>";
                    }
                    else{
                        echo "<h1>Contraseña incorrecta</h1>";
                    }
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
