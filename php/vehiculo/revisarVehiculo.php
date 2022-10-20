<?php  
    require 'claseVehiculo.php';

    session_start();

    $vehiculos = $_SESSION["vehiculos"];

    $matricula = $_POST['matricula'];

    foreach ($vehiculos as $i => $vehiculo) {
        if ($vehiculo->get_matricula() == $matricula) {
            $vehiculo->set_revisado("Y");
        }
    } 

    $_SESSION["vehiculos"] = $vehiculos;

    header('Location:vehiculos.php');
?>