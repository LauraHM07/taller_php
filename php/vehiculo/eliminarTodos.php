<?php
    require 'claseVehiculo.php';
    
    session_start();

    $vehiculos= $_SESSION["vehiculos"];

    foreach ($vehiculos as $i => $vehiculo) {
        unset($vehiculos[$i]);
    }

    $_SESSION["vehiculos"] = $vehiculos;

    header('Location:vehiculos.php');
?>