<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel = "stylesheet" href= "CSS/style.css">
</head>
<body>
 <div>
    <form action="" method="Post">
        <input type="text" name="nombre" id="nom" placeholder ="nombre usuario">
        <input type="text" name="telefono" id="tel" placeholder ="telfono usuario">
        <input type="text" name="email" id="ema" placeholder ="email usuario">
        <input type="text" name="direccion" id="dir" placeholder ="direccion usuario">
        <button type="submit">enviar</button>
    </form>
    <br>
    <a href= "index.php">volver</a>
 </div>
</body>
</html>

<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];

echo "<br><hr><table>
<tr>
<td>Nombre</td>
<td>Telfono</td>
<td>Email</td>
<td>Direccion</td>
</tr>

<tr>
<td>".$nombre."</td>
<td>".$telefono."</td>
<td>".$email."</td>
<td>".$direccion."</td>
</tr>
</table>";
?>
