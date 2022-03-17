<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Galería de imágenes aleatorias</h1>
    </header>
    <div>
        <?php
        $imagenesDir = './';
        $imagenes = glob($imagenesDir . '*.webp', GLOB_BRACE); 
            for ($i = 1; $i <= 100; $i++){
                $randImg =$imagenes[array_rand($imagenes)];
                    if($i >= 1 && $i <= 20){
                    echo "<div class=\"image20\">
                    <img src=".$randImg."> 
                    <p>IMG#".$i."</p>
                    </div>";
                    }
                    elseif($i > 20 && $i <= 39){
                        echo "<div class=\"image39\">
                        <img src=".$randImg."> 
                        <p>IMG#".$i."</p>
                        </div>"; 
                    }
                    elseif($i > 39 && $i <= 59){
                        echo "<div class=\"image59\">
                        <img src=".$randImg."> 
                        <p>IMG#".$i."</p>
                        </div>"; 
                    }
                    elseif($i > 59 && $i <= 79){
                        echo "<div class=\"image79\">
                        <img src=".$randImg."> 
                        <p>IMG#".$i."</p>
                        </div>"; 
                    }
                    elseif($i > 79 && $i <= 100){
                        echo "<div class=\"image100\">
                        <img src=".$randImg."> 
                        <p>IMG#".$i."</p>
                        </div>"; 
                    }
                    
            }
        ?>
    </div>
    <footer>
        <p>Copyright Sierra de Guara 2021</p>
    </footer>
</body>
</html>