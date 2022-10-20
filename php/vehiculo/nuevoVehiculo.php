<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo vehículo</title>
</head>
<body>
    <h2>Nuevo vehículo</h2>

    <form action="altaVehiculo.php" method="post">
        <label for="matricula">Matrícula: </label>
        <input type="text" name="matricula">
        <br/><br/>

        <label for="marca">Marca: </label>
        <input type="text" name="marca">
        <br/><br/>

        <label for="modelo">Modelo: </label>
        <input type="text" name="modelo">
        <br/><br/>

        <label for="color">Color: </label>
        <input type="text" name="color">
        <br/><br/>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>