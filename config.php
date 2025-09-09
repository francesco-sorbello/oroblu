<?php
// admin/config.php
$host = '31.11.39.242';        // dati db Aruba
$db   = 'Sql1886311_1';
$user = 'Sql1886311';
$pass = 'Thanatos1#';
$dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Connessione fallita: " . $e->getMessage());
}
?>