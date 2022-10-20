<?php
    require 'claseVehiculo.php';

    session_start();

    $vehiculos = $_SESSION["vehiculos"];

    $vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color']);

    $vehiculos[$_POST["pos"]] = $vehiculo;

    $_SESSION["vehiculos"] = $vehiculos;

    header('Location:vehiculos.php');
?>