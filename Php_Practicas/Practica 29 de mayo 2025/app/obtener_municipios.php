<?php
header('Content-Type: application/json');

$estado = $_GET['estado'] ?? '';
$estado = urldecode($estado);

$municipiosPorEstado = json_decode(file_get_contents('estados-municipios.json'), true);

if (isset($municipiosPorEstado[$estado])) {
    echo json_encode($municipiosPorEstado[$estado]);
} else {
    echo json_encode([]);
}
