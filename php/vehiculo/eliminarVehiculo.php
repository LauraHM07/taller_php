<?php
    require 'claseVehiculo.php';
    
    session_start();

    $vehiculos= $_SESSION["vehiculos"];

    $pos = $_POST['pos'];

    array_splice($vehiculos, $pos, 1);

    $_SESSION["vehiculos"] = $vehiculos;

    header('Location:vehiculos.php');
?>