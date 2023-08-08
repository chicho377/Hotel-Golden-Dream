<?php include 'vr.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles de la Reserva</title>
    <style>
    @import url("https://fonts.googleapis.com/css?family=Source+Code+Pro:200");

    body {
        background-image: url("https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg");
        background-size: cover;
        -webkit-animation: slidein 100s;
        animation: slidein 100s;

        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;

        -webkit-animation-direction: alternate;
        animation-direction: alternate;
    }

    @-webkit-keyframes slidein {
        from {
            background-position: top;
            background-size: 3000px;
        }

        to {
            background-position: -100px 0px;
            background-size: 2750px;
        }
    }

    @keyframes slidein {
        from {
            background-position: top;
            background-size: 3000px;
        }

        to {
            background-position: -100px 0px;
            background-size: 2750px;
        }
    }

    .center {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(75, 75, 250, 0.3);
        border-radius: 3px;
        flex-direction: column;
    }

    .center h1 {
        text-align: center;
        color: white;
        font-family: "Source Code Pro", monospace;
        text-transform: uppercase;
    }

    .reservation-details {
    background-color: rgba(255,255,255,.05);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 35%; /* Cambia el valor del ancho según tu preferencia */
    margin: 0 auto; /* Para centrar horizontalmente */
}

    .reservation-details h2 {
        color: #eee;
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .detail {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .detail span {
        color: #eee;
        font-weight: bold;
        flex: 1;
        margin-right: 10px;
    }

    .detail p {
        color: #eee;
        flex: 3;
        margin: 0;
    }

    .button {
        background-color: #0080ff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #0059b3;
    }

    form {
    display: block;
    margin-top: 0em;
    text-align: center;
    }
    </style>
</head>

<body>
    <div class="center">
        <div class="reservation-details">
            <h2>Detalles de la Reserva</h2>
            <div class="detail">
                <span>Número de habitación:</span>
                <p><?php echo $room; ?></p>
            </div>
            <div class="detail">
                <span>Fecha de ingreso:</span>
                <p><?php echo $check_in_date; ?></p>
            </div>
            <div class="detail">
                <span>Fecha de salida:</span>
                <p><?php echo $check_out_date; ?></p>
            </div>
            <div class="detail">
                <span>Nombre:</span>
                <p><?php echo $Nombre; ?></p>
            </div>
            <div class="detail">
                <span>Apellido:</span>
                <p><?php echo $Apellido; ?></p>
            </div>
            <div class="detail">
                <span>Edad:</span>
                <p><?php echo $Edad; ?></p>
            </div>
            <div class="detail">
                <span>Email:</span>
                <p><?php echo $Email; ?></p>
            </div>
            <div class="detail">
                <span>Teléfono:</span>
                <p><?php echo $Telefono; ?></p>
            </div>
            <div class="detail">
                <span>Identificación:</span>
                <p><?php echo $Identificacion; ?></p>
            </div>

            <form action="imprimir_reserva.php" method="post">
                <button type="submit" class="button">Imprimir PDF</button>
            </form>
        </div>

    </div>

</body>

</html>