<?php // arquivo onde executra a criação da tabela no banco
require_once 'conecta.php'; // chama a "função" de conexão com o banco
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT DEFAULT 0
)";
$pdo->exec($sql); // chave de acesso (pdo) vai executar (exec) no banco de dados (sql)
echo "<h1>Tabela criada com sucesso!</h1>";
//header("Location: relatorio.php?msg=tabela_pronta");
?>