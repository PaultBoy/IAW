<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "pruebasphpuser";
        $password = "1234";
        
        $connect = mysqli_connect($servername, $username, $password);
        if(!$connect){
            die("No se ha podido conectar a la base de datos: ".mysqli_connect_error());
        }
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $sql1 = "Use pruebasphpdb";
        $sql2 = "Create table Nombres4(id int primary key auto_increment, nombre varchar(255), apellido varchar(255));";
        $sql3 = "Insert into Nombres4(nombre, apellido) values('$nombre','$apellido');";
        if (mysqli_query($connect, $sql1)){
            echo "Conectado con éxito";
            echo "<br>";
            if (mysqli_query($connect, $sql2)){
                echo "Tabla creada con éxito";
                echo "<br>";
                if (mysqli_query($connect, $sql3)){
                    echo "Datos ".$_POST['nombre']." y ".$_POST['apellido']." insertado correctamente.";
                    echo "<br>";
                }
                else{
                    echo mysqli_error($connect);
                }
            }
            else{
                echo mysqli_error($connect);
            }
        }
        else{
            echo mysqli_error($connect);
        }

        mysqli_close($conn);
    ?>
</body>
</html>