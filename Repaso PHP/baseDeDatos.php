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
        $user = $_POST['nombre'];
        $pass = $_POST['contrasena'];
        $server = "localhost";
        $userServer = "userRep";
        $servPass = "1234";

        $sql_conn = mysqli_connect($server,$userServer,$servPass,"ejRep");
        if(!$sql_conn){
            echo "<script>alert(\"Connection with server went wrong\")</script>";
            mysqli_close($sql_conn);
        }
        else{
            $hash_pass = hash("md5",$pass);
            $sql =  "insert into usuarios values('".$user."','".$hash_pass."');";
            if(mysqli_query($sql_conn,$sql)){
                echo "<h1>Datos insertados correctamente</h1>";
                $show = "select * from ejRep.usuarios;";
                $query_show = mysqli_query($sql_conn,$show);
                if(mysqli_num_rows($query_show)>0){
                    while($row = mysqli_fetch_assoc($query_show)){
                        echo $row["usuario"];
                        echo $row["contrasenya"];
                    }
                }
            }
            else{
                echo "<h1>Error: " . $sql . "<br>" . mysqli_error($sql_conn)."</h1>";
            }
        mysqli_close($sql_conn);
        echo "<a href=\"index.html\">Volver</a>";
        }

    ?>
</body>
</html>