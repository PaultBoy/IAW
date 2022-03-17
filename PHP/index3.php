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
    $dia_ingles = date('D');
    if($dia_ingles == "Mon"){
        echo "El día de la semana es: Lunes";
    }
    elseif($dia_ingles == "Tue"){
        echo "El día de la semana es: Martes";
    }
    elseif($dia_ingles == "Wed"){
        echo "El día de la semana es: Miércoles";
    }
    elseif($dia_ingles == "Thu"){
        echo "El día de la semana es: Jueves";
    }
    elseif($dia_ingles == "Fri"){
        echo "El día de la semana es: Viernes";
    }
    elseif($dia_ingles == "Sat"){
        echo "El día de la semana es: Sábado";
    }
    else{
        echo "El día de la semana es: Domingo";
    }
    ?>
</body>
</html>