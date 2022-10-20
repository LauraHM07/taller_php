<?php
    require 'claseVehiculo.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Vehículos</h1>

    <table border="1" width="600em" style="text-align:center">
        <tr">
            <td>
                <p>Matrícula</p>
            </td>
            <td>
                <p>Marca</p>
            </td>
            <td>
                <p>Modelo</p>
            </td>
            <td>
                <p>Color</p>
            </td>
            <td>
                <p>Revisado</p>
            </td> 
        </tr>

        <?php
            $vehiculos = $_SESSION["vehiculos"];

            foreach($vehiculos as $i => $vehiculo) {
                echo "<tr>";
                echo "<td> <p>" . $vehiculo->get_matricula() . "</p> </td>";
                echo "<td> <p>" . $vehiculo->get_marca() . "</p> </td>";
                echo "<td> <p>" . $vehiculo->get_modelo() . "</p> </td>";
                echo "<td> <p>" . $vehiculo->get_color() . "</p> </td>";
                echo "<td> <p>" . $vehiculo->get_revisado() . "</p> </td>";
                echo "<td> 
                        <form action='revisarVehiculo.php' method='post'>
                            <input type='submit' value='Revisar'>
                            <input type='hidden' name='matricula' value='".$vehiculo->get_matricula()."'>
                        </form>
                        </td>
                        <td>
                            <form action='editarVehiculo.php' method='post'>
                                <input type='submit' value='Editar'>
                                <input type='hidden' name='matricula' value='".$vehiculo->get_matricula()."'>
                            </form>
                        </td>
                        <td>
                            <form action='eliminarVehiculo.php' method='post'>
                                <input type='submit' value='Borrar'>
                                <input type='hidden' name='pos' value='".$i."'>
                            </form>
                        </td>";
                echo "</tr>";
            }
        ?>
    </table>

    <br/>

    <button id="boton"><a href="eliminarTodos.php">Eliminar todos</a></button>
    <button id="boton"><a href="nuevoVehiculo.php">Nuevo vehículo</a></button>
    <button id="boton"><a href="../../index.php">Cerrar</a></button>
</body>
</html>