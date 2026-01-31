<?php
// 1. Configuración de las credenciales
$host = 'localhost';
$db   = 'ciad';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// 2. Configuración del DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// 3. Opciones de configuración de PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lanza excepciones en caso de error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devuelve los datos como array asociativo
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa consultas preparadas reales
];

try {
 
    $pdo = new PDO($dsn, $user, $pass, $options);
    


} catch (\PDOException $e) {
    // 5. Manejo de errores
    // En producción, es mejor guardar el error en un log y no mostrarlo al usuario
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>