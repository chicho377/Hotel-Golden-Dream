<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room = $_POST["room"];
    $checkInDate = $_POST["check_in_date"];
    $checkOutDate = $_POST["check_out_date"];

    $sql = "SELECT check_in_date, check_out_date FROM reservations WHERE room_number = '$room'";
    $result = $conexion->query($sql);

    $booked_dates = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $check_in_date = new DateTime($row["check_in_date"]);
            $check_out_date = new DateTime($row["check_out_date"]);

            $current_date = clone $check_in_date;
            while ($current_date <= $check_out_date) {
                $booked_dates[] = $current_date->format("Y-m-d");
                $current_date->add(new DateInterval("P1D"));
            }
        }
    }

    echo json_encode($booked_dates);
}
?>