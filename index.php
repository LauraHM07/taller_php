<?php
    session_start();

    /* Si vuelvo para atrás en el listado con el botón "cerrar", si solo declaras el session tal que:
        $_SESSION["vehiculos"] = [];
        El listado de vehículos se reseteará todo el rato. Con el método !isset comprobamos si no existe,
        en este caso, lo crea, si existe lo deja tal cual.
    */
    if(!isset($_SESSION["vehiculos"])) {
        $_SESSION["vehiculos"] = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Taller</h1>

    <ul>
        <li><a href="php/vehiculo/vehiculos.php">Vehículos</a></li>
    </ul>
</body>
</html>