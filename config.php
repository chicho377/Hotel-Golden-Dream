<?php
            $servidor = "localhost";
            $NombreUsuario = "root";
            $Clave = "root123";
            $BD = "goldendream";

        $conexion = new mysqli ($servidor, $NombreUsuario, $Clave, $BD);

        if ($conexion -> connect_error)
            {
                die("Conexión Fallida".$conexion -> connect_error);
                echo "No se puedo conectar a la base de datos";

            } 
?>