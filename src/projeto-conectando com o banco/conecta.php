<?php 

$host = 'db'; $db = 'app_db'; $user = 'app_user'; $pass = 'app_pass'; // definição das variaveis de acesso.
// definido para o php myadmin
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4"; // definiçao dos caracteres

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

?>