<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resta</title>
    <link rel = "stylesheet" href= "CSS/style.css">
</head>
<body>
 <div>

    <form action="" method="Post">
        <input type="text" name="numero1" id="num" placeholder ="digite el primer numero">
        <input type="text" name="numero2" id="num" placeholder ="digite el segundo numero">
        <button type="submit">enviar</button>
    </form>
    <br>
    <a href= "index.php">volver</a>
 </div>
</body>
</html>

<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

echo "<br><hr><table>
<tr>
<td>Numero 1</td>
<td>Numero 2</td>
</tr>

<tr>
<td>".$num1."</td>
<td>".$num2."</td>
</tr>

</table>";

$resta = $num1 - $num2;

echo "<h1> El resultado de la resta es: \n".$resta."</h1>";

?>