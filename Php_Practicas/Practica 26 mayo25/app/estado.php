<?php
$foco = $_GET['foco'];
$archivo = "foco$foco.txt";

$estado = "0";
if (file_exists($archivo)) {
  $estado = file_get_contents($archivo) === "1" ? "0" : "1";
} else {
  $estado = "1";
}

file_put_contents($archivo, $estado);
?>
