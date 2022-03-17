<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
    <style>
        .flex {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            align-content: center;
        }
        .flex > div > p {
            color: <?php echo $_GET["colorDivs"] ?>;
        }
    </style>
</head>
<body>
    <div class="flex">
        <?php
            for  ($num = 0; $num < $_GET["numDivs"]; $num++){
                echo "<div>";
                echo "<p>";
                echo $_GET["textDivs"];
                echo "</p>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>