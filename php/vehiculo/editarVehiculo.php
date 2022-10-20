<?php
    require 'claseVehiculo.php';

    session_start();

    $vehiculos = $_SESSION["vehiculos"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vehículo</title>
</head>
<body>
<h1>Editar vehículo</h1>

<?php
    $matricula = $_POST['matricula'];
    $posicion = 0;
    
    foreach ($vehiculos as $i => $vehiculo) {
        if ($vehiculo->get_matricula() == $matricula) {
            $matricula = $vehiculo->get_matricula();
            $marca = $vehiculo->get_marca();
            $modelo = $vehiculo->get_modelo();
            $color = $vehiculo->get_color();

            break;
        }

        $posicion++;
    }

    echo "<form action='editado.php' method='post'>
            Matrícula: <input type='text' name='matricula' value='".$matricula."'>
            <br/><br/>
            Marca: <input type='text' name='marca' value='".$marca."'>
            <br/><br/>
            Modelo: <input type='tex't name='modelo' value='".$modelo."'>
            <br/><br/>
            Color: <input type='text' name='color' value='".$color."'>
            <br/><br/>
            <input type='hidden' value='".$posicion."' name='pos'>
            <input type='submit' value='Editar'>
        </form>"
?>
</body>
</html>