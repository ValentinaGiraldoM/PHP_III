
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valen</title>
    <link rel = "stylesheet" href= "CSS/style.css">
</head>
<body>
    <div>
        <h1>Menu de opciones</h1>
        <ul>
            <li>1. Datos de usuario</li>
            <li>2. Suma </li>
            <li>3. Resta</li>
            <li>4. Multiplicion</li>
            <li>5. Division</li>
        </ul>
    <form action="" method="post">
        <p>
        <input type="number" name="opt" id="opt">
        <button type="submit">ingresar</button>
    </form>
    </div>
</body>
</html>


<?php

$opt = $_POST['opt'];

switch ($opt) 
{
    case '1':
       header ('location: formulario.php');
        break;
    
    case '2':
        header ('location: suma.php');
            break;

    case '3':
        header ('location: resta.php');
        break;

    case '4':
        header ('location: multiplicaion.php');
        break;

    case '5':
        header ('location: division.php');
            break;

    default:
        echo "por favor seleccione una opcion valida";
        break;
}

echo "<h1>".$opt."</h1>";
