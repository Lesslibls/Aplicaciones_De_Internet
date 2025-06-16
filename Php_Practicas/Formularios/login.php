<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Conexión a MySQL en Docker
$host = 'db';  // nombre del servicio de MySQL en docker-compose
$db = 'demo_db';
$user = 'demo_user';
$pass = 'demo_pass';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE nombre = ? AND contrasena = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    header("Location: bienvenida.php");
    exit();
} else {
    echo "❌ Usuario o contraseña incorrectos.";
}

$conn->close();
?>
