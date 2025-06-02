<?php
// Establecer la zona horaria correcta
date_default_timezone_set('America/Mexico_City');

// Verificar si se envió un mensaje por POST
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["mensaje"])) {
    $mensaje = trim($_POST["mensaje"]);
    if ($mensaje !== "") {
        $fecha = date("h:i A"); // Formato: 11:45 AM
        $linea = "[" . $fecha . "] " . $mensaje . PHP_EOL;
        file_put_contents("mensajes.dat", $linea, FILE_APPEND | LOCK_EX);
    }
}
