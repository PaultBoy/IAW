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
        $server = "localhost";
        $user = "userRep";
        $password = "1234";
        $db = "Repaso";

        $conn = mysqli_connect($server,$user,$password,$db);
        if($conn){
            echo "Datos vistos correctamente";
            for($i=0;$i<20;$i++){
                $sqlQuery = "insert into Repaso.random values(".rand().",".rand(1,100).",".rand(100,1000).")";
                mysqli_query($conn,$sqlQuery);
            }
            echo "Datos vistos correctamente";
            $sqlRec = "select * from Repaso.random";
            $sqlQ=mysqli_query($conn,$sqlRec);
            $j=0;
            while($row = mysqli_fetch_assoc($sqlQ)){
                if ($j < 5){
                    echo "<p> A:".$row['a']." B:".$row['b']."  C:".$row['c']."</p>";
                }
                $j++;
            }
        }
        else{
            echo "Error:".mysqli_error();
        }
    ?>
</body>
</html>