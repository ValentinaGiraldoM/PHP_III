<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel = "stylesheet" href= "CSS/style.css">
</head>
<body>
 <div>
    <form action="" method="Post">
        <input type="text" name="usu" id="usu" placeholder ="Ingrese usuario" pattern="[a-zA-Z0-9]+" required>
        <input type="password" name="contra" id="contra" placeholder ="Ingrese Contraseña"  required>
        <button type="submit" name="login" value="login">Ingresar</button>
    </form>
 </div>
</body>
</html>


<?php
$usuario = $_POST['usu'];
$contraseña = $_POST['contra'];


if ($usuario == true  && $contraseña == true) 
{
    header ('location: index.php');
}

?>

