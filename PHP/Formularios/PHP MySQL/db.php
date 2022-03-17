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
        $servername = "localhost";
        $username = "pruebasPHPuser";
        $password = "1234";
        $dbname = "pruebasPHPdb";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
        if (!$conn) {
            echo"Connection failed: " . mysqli_connect_error();
        }else{
            echo "Connected successfully";
            echo "<br>";
        }


        

        // Solucion1
        //$sql = "INSERT INTO MyGuests (firstname, lastname, email)
        //VALUES ('".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['email']."')";
        

        //Solucion2, diferente forma
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $email=$_POST['email'];
        

        // sql to create table
        $sql1 = "CREATE TABLE MyGuests (
                firstname varchar(255),
                lastname varchar(255),
                email varchar(255) primary key
                )";
        $sql2 = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('$nombre', '$apellidos', '$email')";

        if (mysqli_query($conn, $sql1)) {
        echo "Tabla creada correctamente";
        } else {
        echo "Error no se ha podido crear la tabla: " . mysqli_error($conn);
        }

        if (mysqli_query($conn, $sql2)) {
        echo "Datos introducidos correctamente";
        } else {
        echo "Error no se han podido introducir los datos: " . mysqli_error($conn);
        }

        mysqli_close($conn);




    ?>
    
</body>
</html>