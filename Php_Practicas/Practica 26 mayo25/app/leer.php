<?php
$foco = $_GET['foco'];
$archivo = "foco$foco.txt";

if (!file_exists($archivo)) {
  file_put_contents($archivo, "0");
}

echo file_get_contents($archivo);
?>
