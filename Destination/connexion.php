<?php
// Datos de conexión a la base de datos
$dsn = 'mysql:host=localhost;dbname=projectphp';
$username = 'root';
$password = '';

try {
    // Crear una nueva conexión PDO
    $conn = new PDO($dsn, $username, $password);

    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    echo "Error de conexión: " . $e->getMessage();
}
?>
