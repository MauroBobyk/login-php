<?php
// Conexión a la base de datos (XAMPP)
$host = 'localhost';
$db   = 'login';
$user = 'root';
$pass = '';

try {
    // PDO conecta PHP con la base de datos
    $conexionbd = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [
            // Si hay error en una consulta, lanza una excepción
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // Lee cada fila como array asociativo: ['id' => 1, 'usuario' => 'admin']
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    // Si falla la conexión, cortamos y mostramos el error
    die("No se pudo conectar a la base de datos: " . $e->getMessage());
}
// En el resto del proyecto usamos la variable $conexionbd
?>
