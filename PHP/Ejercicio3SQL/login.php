<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	table,td{
	  padding: 10px;
	  border: solid 1px black;
	  border-collapse: collapse;
	}
	thead > tr > td{
	  font-weight: bold;
	  text-align: center;
	}
    </style>
</head>
<body>
    <?php
        $servidor = "localhost";
        $usuario = $_POST['usuario'];
        $contrasenya = $_POST['contrasenya'];

        $usuarioBD = "userEj3";
        $contrasenyaBD = "1234";
        $nombreBD = "Ejercicio3";
        $nombreTablaBD = "usuarios";
        // Crear conexión con base de datos
        $conexion = mysqli_connect($servidor, $usuarioBD, $contrasenyaBD, $nombreBD);
        // función para implementar alert
        function alert($mensaje){
            echo "<script type=\"text/javascript\">alert(\"$mensaje\");</script>";
        }
        // Se intenta acceder a la base de datos con los datos internos de funcionamiento
        if(!$conexion){
            alert("Connection failed: " . mysqli_connect_error());
        }
        else{
            alert("Connected");
            $sqlQuery = "select * from Ejercicio3.usuarios;";
            $muestra = mysqli_query($conexion,$sqlQuery);
            // enviamos la query que comprueba si el usuario existe
            if($muestra){
                $numFilas = mysqli_query($conexion,"Select usuario from Ejercicio3.usuarios where usuario = '".$usuario."';");
                $numFilasFinal = mysqli_fetch_assoc($numFilas);
                if ($numFilasFinal['usuario'] == ""){
                    echo "<h1>El usuario no existe</h1>";
                }
                //Si el usuario existe, se hace lo siguiente
                else{
                    $passwd = mysqli_query($conexion,"Select password from Ejercicio3.usuarios where usuario = '".$usuario."';");
                    //Se almacenan datos de una fila en un array
                    $passwdFinal = mysqli_fetch_assoc($passwd);
                    //Se genera un hash de la contraseña introducida y se compara con el hash almacenado en la tabla
                    if (hash("md5",$contrasenya) == $passwdFinal['password']){
                        echo "<h1>Bienvenido ".$usuario."</h1>";
                        echo "<h1>Contraseña: ".$contrasenya."</h1>";
                        $sql = "select * from Ejercicio3.usuarios;";
                        $queryMostrar = mysqli_query($conexion, $sql);

                        if (mysqli_num_rows($queryMostrar) > 0) {
                        // output data of each fila
                            echo "<table>";
                            echo "<thead><td>Usuario</td><td>Contraseña</td><td>Nombre</td><td>Apellidos</td><td>DNI</td></thead>";
                            // $fila almacena una fila de la tabla 'usuarios' en cada iteración tras llevar a cabo la query
                            // , mostrándose unos datos distintos en cada pasada
                            while($fila = mysqli_fetch_assoc($queryMostrar)) {
                                //Mostrar por pantalla cada fila siguiendo la estructura de la tabla siguiente
                                echo "<tr><td>".$fila['usuario']."</td><td>".$fila['password']."</td><td>".$fila['nombre']."</td><td>".$fila['apellidos']."</td><td>".$fila['dni']."</td></tr>";
                            }   
                            echo "</table>";
                        }
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
