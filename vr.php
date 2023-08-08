<?php
session_start();


if (isset($_SESSION['Nombre']) && isset($_SESSION['Apellido']) && isset($_SESSION['Edad']) && isset($_SESSION['Email']) && isset($_SESSION['Telefono']) && isset($_SESSION['Identificacion']) && isset($_SESSION['room']) && isset($_SESSION['check_in_date']) && isset($_SESSION['check_out_date'])) {
    
    $Nombre = $_SESSION['Nombre'];
    $Apellido = $_SESSION['Apellido'];
    $Edad = $_SESSION['Edad'];
    $Email = $_SESSION['Email'];
    $Telefono = $_SESSION['Telefono'];
    $Identificacion = $_SESSION['Identificacion'];
    $check_in_date = $_SESSION['check_in_date'];
    $check_out_date = $_SESSION['check_out_date'];
    $room = $_SESSION['room'];
} else {

    header('Location: reserva.php');
    exit();
}
?>