 <?php
include 'config.php';
require_once 'pdf/fpdf.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Identificacion = $_POST['Identificacion'];
    $check_in_date = $_POST["check_in_date"];
    $check_out_date = $_POST["check_out_date"];
    $room = $_POST["room"]; 

    $current_date = new DateTime();
    $check_in_date_obj = new DateTime($check_in_date);

    if ($check_in_date_obj >= $current_date) {
    
        $check_out_date_obj = new DateTime($check_out_date);
        if ($check_out_date_obj > $check_in_date_obj) {
        
            $sql = "SELECT * FROM datos_cliente_y_reserva WHERE room_number = '$room' AND check_in_date <= '$check_out_date' AND check_out_date >= '$check_in_date'";
            $result = $conexion->query($sql);

            if ($result->num_rows > 0) {
                echo "La habitación está ocupada en estas fechas. Por favor, escoge otras fechas.";
            } else {
                // Realizar la consulta a la base de datos para insertar la reserva
                $insert_sql = "INSERT INTO datos_cliente_y_reserva (Nombre, Apellido, Edad, Email, Telefono, Identificacion, room_number, check_in_date, check_out_date)
                               VALUES ('$Nombre', '$Apellido', '$Edad', '$Email', '$Telefono', '$Identificacion', '$room', '$check_in_date', '$check_out_date')";

                if ($conexion->query($insert_sql) === TRUE) {
                    // Guardar los datos de la reserva y del cliente en sesiones
                    session_start();
                    $_SESSION['Nombre'] = $Nombre;
                    $_SESSION['Apellido'] = $Apellido;
                    $_SESSION['Edad'] = $Edad;
                    $_SESSION['Email'] = $Email;
                    $_SESSION['Telefono'] = $Telefono;
                    $_SESSION['Identificacion'] = $Identificacion;
                    $_SESSION['room'] = $room;
                    $_SESSION['check_in_date'] = $check_in_date;
                    $_SESSION['check_out_date'] = $check_out_date;

                    
                    header('Location: ver_reserva.php');
                    exit();
                } else {
                    echo "Error al realizar la reserva: " . $conexion->error;
                }
            }
        } else {
            echo "La fecha de salida debe ser mayor que la fecha de ingreso.";
        }
    } else {
        echo "La fecha de ingreso debe ser posterior o igual a la fecha actual.";
    }
}
?>
