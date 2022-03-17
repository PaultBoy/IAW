<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Creación de un nuevo usuario</p>
    <form action="baseDeDatos2.php" method="post">
        <p>Usuario:    <input type="text" name="usuario" maxlength="32"></p>
        <p>Contraseña: <input type="password" name="contrasenya">          </p>
        <p>Nombre: <input type="text" name="nombre">          </p>
        <p>Apellidos: <input type="text" name="apellidos">          </p>
        <p>DNI: <input type="text" name="dni">          </p>
        <input type="submit" value="Enviar datos a BD">
    </form>
</body>
</html>
