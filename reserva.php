<?php include 'rt.php'?>

<title>Hotel Golden Dream</title>
<link rel="icon" href="img/Favicon.ico" type="image/png">
<link rel="stylesheet" type="text/css" href="style/style.css">
<?php include 'header.php'; ?>
<div id="location" class="section">
    <div class="location-grid">
        <div class="location-left">
            <div class="flip-card2">
                <div class="flip-card2-inner">
                    <div class="flip-card2-front">
                        <p class="title">Paquetes Turísticos</p>
                        <p class="title2">Aventura en la Selva</p>
                        <p>• Excursión a la selva para observar flora y fauna exótica.</p>
                        <p>• Visita a cascadas y pozas naturales para nadar.</p>
                        <p>• Recorrido en canopy por las copas de los árboles.</p>
                        <p>• Senderismo en senderos naturales con guía especializado.</p>
                        <p>• Tour nocturno para observar la vida silvestre en la oscuridad.</p>
                    </div>
                    <div class="flip-card2-back">
                        <p class="title">Paquetes Turísticos</p>
                        <p class="title2">Relax en la Playa</p>
                        <p>• Días de descanso en hermosas playas de arena blanca.</p>
                        <p>• Sesiones de yoga y meditación frente al mar.</p>
                        <p>• Masajes y tratamientos de spa en la playa.</p>
                        <p>• Clases de surf y paddleboarding para los más aventureros.</p>
                        <p>• Paseo en barco para ver delfines y ballenas en su hábitat natural.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="location-center">
            <div id="reservation" class="section3">
                <div class="card">
                    <div class="card-inner">
                        <h2>Registro de Datos</h2>
                        <form action="reserva.php" method="post" class="reservation-form">

                            <div class="form-group-row">
                                <div class="form-group">
                                    <div class="input-wrapper">
                                        <input type="text" placeholder="Identificación" name="Identificacion"
                                            id="Identificacion" class="input" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <div class="form-group">
                                    <div class="input-wrapper">
                                        <input for="Nombre" type="text" placeholder="Nombre" name="Nombre" id="Nombre"
                                            class="input" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-wrapper">
                                        <input type="text" placeholder="Apellido" name="Apellido" id="Apellido"
                                            class="input" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <div class="form-group">
                                    <div class="input-wrapper">
                                        <input type="number" placeholder="Edad" name="Edad" id="Edad" class="input"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-wrapper">
                                        <input type="tel" placeholder="Teléfono" name="Telefono" id="Telefono"
                                            class="input" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-wrapper">
                                    <input type="email" placeholder="Correo" name="Email" id="Email" class="input"
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="room" class="radio-label">Selecciona una habitación:</label>
                                <div class="radio-inputs">
    <?php for ($i = 1; $i <= 3; $i++) { ?>
        <label class="radio">
            <input type="radio" name="room" id="room<?php echo $i; ?>"
                value="<?php echo $i; ?>" onchange="showReservations()" required>
            <span class="name">
                <?php
                switch ($i) {
                    case 1:
                        echo "Villa privada";
                        break;
                    case 2:
                        echo "Premium";
                        break;
                    case 3:
                        echo "Villa familiar";
                        break;
                    default:
                        echo "Habitación " . $i;
                        break;
                }
                ?>
            </span>
        </label>
    <?php } ?>
</div>

                            </div>

                            <div class="form-group">
                                <div class="input-wrapper">
                                    <label for="departure-date">Fecha de llegada:</label>
                                    <input type="date" placeholder="Fecha de llegada:" name="check_in_date"
                                        id="check_in_date" onchange="showReservations()" class="input" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-wrapper">
                                    <label for="departure-date">Fecha de salida:</label>
                                    <input type="date" placeholder="Fecha de llegada:" name="check_out_date"
                                        id="check_out_date" onchange="showReservations()" class="input" required>
                                </div>
                            </div>

                            <button type="submit" class="button">Reservar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="location-right">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="title">Actividades Turísticas</p>
                        <p>Surf en las olas del mar</p>
                        <p>Excursión a la Playa</p>
                        <p>Explorar cascadas y piscinas naturales</p>
                        <p>Senderismo en la Selva</p>
                        <p>Observación de aves</p>
                        <p>Snorkel en arrecifes</p>
                        <p>Paseos en kayak</p>
                        <p>Excursiones en lancha</p>
                        <p>Tour en Bicicleta</p>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">Actividades Turísticas</p>
                        <p>Pesca deportiva en alta mar</p>
                        <p>Avistamiento de tortugas </p>
                        <p>Excursiones para avistar fauna silvestre</p>
                        <p>Disfrutar de puestas de sol en la playa</p>
                        <p>Practicar yoga al aire libre</p>
                        <p>Hacer fogatas nocturnas en la playa</p>
                        <p>Descubrir cuevas y formaciones rocosas</p>
                        <p>Tomar fotografías de cascadas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
function showReservations() {
    const room = document.getElementById("room").value;
    const checkInDate = document.getElementById("check_in_date").value;
    const checkOutDate = document.getElementById("check_out_date").value;

    // Realizar una solicitud AJAX para obtener las fechas ocupadas
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const bookedDatesByRoom = JSON.parse(this.responseText);
            generateCalendar(bookedDatesByRoom);
        }
    };
    xhttp.open("GET", "get_booked_dates.php?room=" + room, true);
    xhttp.send();
}

function generateCalendar(bookedDatesByRoom) {
    const calendar = document.getElementById("calendar");
    calendar.innerHTML = "";

    const table = document.createElement("table");
    const headerRow = document.createElement("tr");
    headerRow.innerHTML = "<th></th>";

    // Cabeceras de las habitaciones
    for (let i = 1; i <= 10; i++) {
        headerRow.innerHTML += "<th>Habitación " + i + "</th>";
    }

    table.appendChild(headerRow);

    const month = new Date().getMonth() + 1; // Mes actual
    const year = new Date().getFullYear();
    const daysInMonth = new Date(year, month, 0).getDate();

    for (let day = 1; day <= daysInMonth; day++) {
        const row = document.createElement("tr");
        row.innerHTML = "<td>" + day + "</td>";

        for (let room = 1; room <= 10; room++) {
            const formattedDate = year + "-" + String(month).padStart(2, "0") + "-" + String(day).padStart(2, "0");
            const class = bookedDatesByRoom[room] && bookedDatesByRoom[room].includes(formattedDate) ? "booked" : "";

            // Agregar evento onclick a cada celda para verificar si está ocupada antes de reservar
            const isAvailable = class === "" ? "true" : "false";
            row.innerHTML +=
                `<td class='${class}' onclick='checkAvailability(${room}, "${formattedDate}", ${isAvailable})'></td>`;
        }

        table.appendChild(row);
    }

    calendar.appendChild(table);
}

function checkAvailability(room, date, isAvailable) {
    if (isAvailable === "true") {
        const checkInDateInput = document.getElementById("check_in_date");
        checkInDateInput.value = date;

        const checkOutDateInput = document.getElementById("check_out_date");
        checkOutDateInput.value = date;

        const roomSelect = document.getElementById("room");
        roomSelect.value = room;
    } else {
        alert("Esta habitación ya está ocupada en esta fecha. Por favor, elige otra fecha u otra habitación.");
    }
}


showReservations();


const roomSelect = document.getElementById("room");
roomSelect.addEventListener("change", showReservations);
const checkInDateInput = document.getElementById("check_in_date");
checkInDateInput.addEventListener("change", showReservations);
const checkOutDateInput = document.getElementById("check_out_date");
checkOutDateInput.addEventListener("change", showReservations);
</script>
<?php include 'footer.php'; ?>