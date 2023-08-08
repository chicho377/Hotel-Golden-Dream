<?php
require_once 'pdf/TCPDF-main/tcpdf.php';
session_start();

// Obtener los datos de la reserva y del cliente desde las sesiones
$Nombre = $_SESSION['Nombre'];
$Apellido = $_SESSION['Apellido'];
$Edad = $_SESSION['Edad'];
$Email = $_SESSION['Email'];
$Telefono = $_SESSION['Telefono'];
$Identificacion = $_SESSION['Identificacion'];
$check_in_date = $_SESSION['check_in_date'];
$check_out_date = $_SESSION['check_out_date'];
$room = $_SESSION['room'];

// Crear el PDF con los detalles de la reserva y los datos del cliente
$pdf = new TCPDF('P', 'mm', 'A5', true, 'UTF-8', false);
$pdf->SetMargins(10, 0, 0, 0); // Márgenes del PDF: izquierdo, superior, derecho, inferior
$pdf->AddPage();

// Agregar la imagen de fondo al PDF y ajustar al tamaño del PDF sin bordes
$imageFile = 'img/GoldenDreamResort@gmail.com.jpg'; // Ruta a tu imagen de fondo
$pdf->Image($imageFile, 0, 0, 200, 250, '', '', '', false, 280, '', false, false, 0);

// Estilos personalizados para el texto
$pdf->SetFont('helvetica', '', 12); // Tipo de fuente y tamaño más pequeño
$pdf->SetTextColor(80, 80, 80); // Color de texto (RGB)

// Centrar contenido en la página con posición vertical ajustada
$pdf->SetXY(0, 80); // Ajustar la posición Y según tus necesidades

$pdf->Cell(0, 8, 'Número de habitación: ' . $room, 0, 1, 'C');
$pdf->Cell(0, 8, 'Fecha de ingreso: ' . $check_in_date, 0, 1, 'C');
$pdf->Cell(0, 8, 'Fecha de salida: ' . $check_out_date, 0, 1, 'C');
$pdf->Ln(8); // Espacio adicional entre secciones
$pdf->Cell(0, 8, 'Identificación: ' . $Identificacion, 0, 1, 'C');
$pdf->Cell(0, 8, 'Nombre: ' . $Nombre, 0, 1, 'C');
$pdf->Cell(0, 8, 'Apellido: ' . $Apellido, 0, 1, 'C');
$pdf->Cell(0, 8, 'Edad: ' . $Edad, 0, 1, 'C');
$pdf->Cell(0, 8, 'Email: ' . $Email, 0, 1, 'C');
$pdf->Cell(0, 8, 'Teléfono: ' . $Telefono, 0, 1, 'C');

// Guardar el PDF en una variable para poder descargarlo
$pdf_data = $pdf->Output('', 'S');

// Enviar el PDF al cliente para su descarga
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="reserva.pdf"');
echo $pdf_data;
?>
