<?php  
    require 'claseVehiculo.php';

    session_start();

    $vehiculo = new Vehiculo($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['color']);

    array_push($_SESSION["vehiculos"], $vehiculo);

    header('Location:vehiculos.php');
?>