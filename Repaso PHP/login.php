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
        $user = $_POST['user'];
        $pass = $_POST['pass'];
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
            $sql_usuario = "select usuario from ejRep.usuarios where usuario = '".$user."';";
            $query = mysqli_query($sql_conn,$sql_usuario);
            if($query){
                $cuenta=mysqli_fetch_assoc($query);
                if ($cuenta['usuario'] == ""){
                    echo "El usuario no existe";
                }
                else{
                    $contrasenya = "select contrasenya from ejRep.usuarios where usuario = '".$user."';";
                    $datoCon1 = mysqli_query($sql_conn,$contrasenya);
                    if ($datoCon1){
                        $datoCon = mysqli_fetch_assoc($datoCon1);
                        
                        if ($datoCon['contrasenya'] == $hash_pass){
                            echo "Contraseña correcta";
                        }
                        else{
                            echo "Contraseña incorrecta";
                        }
                    }
                        
                }
            }
            else{
                echo "<h1>Error: " . $sql_usuario . "<br>" . mysqli_error($sql_conn)."</h1>";
            }
        mysqli_close($sql_conn);
        echo "<a href=\"index.html\">Volver</a>";
        }
    ?>
</body>
</html>