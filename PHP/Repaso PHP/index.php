<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso</title>
</head>
<body>
    <?php
        $name = "alumno";
        $pass = "alumno";
        $db = "bd_juego";
        $host = "bd.iesguara.cf";
        $conn = mysqli_connect($host,$name,$pass,$db);

        function otros20(){
            
            $juegos = "select nombre from bd_juego.juego;";
            $numbers = mysqli_query($conn,$juegos);
            $iFinal = $i + 20;
            if($numbers){
                if (mysqli_num_rows($numbers) > 0){
                    while($fila = mysqli_fetch_assoc($numbers)){
                        if ($i<=$iFinal){
                            echo "<p>".$i." Juego: ".$fila["nombre"]."</p>";
                        $i++;
                        }
                    } 
                }
            }
            
        }

        if(!$conn){
            echo "<p>Error: ".mysqli_error($conn)."</p>";
        }
        else{
            echo "<p>Conexión correcta</p>";
            $juegos = "select nombre from bd_juego.juego;";
            $numbers = mysqli_query($conn,$juegos);
            if($numbers){
                if (mysqli_num_rows($numbers) > 0){
                    $i = 1;
                    while($fila = mysqli_fetch_assoc($numbers)){
                        if ($i<=20){
                            echo "<p>".$i." Juego: ".$fila["nombre"]."</p>";
                            $i++;
                        }
                    }
                } 
            }
        }
            
        

    ?>
    <script>
        
    </script>
</body>
</html>