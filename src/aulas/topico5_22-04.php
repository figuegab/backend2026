<!-- 22/04/2026 Estruturas condicionais -->

<!-- If else -->
<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>

<!-- elseif -->
<?php
echo "<hr>";
$hora = 10;

if ($hora < 12) {
    echo "Bom dia!";
} elseif ($hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>

<!-- Praticando -->
<?php
echo "<hr>";

$semaforo = "verde";

if ($semaforo == "verde") {
    echo "Siga em frente";
} elseif ($semaforo == "amarelo") {
    echo "Atenção";
} elseif ($semaforo == "vermelho") {
    echo "Pare";
} else { // o else serve para tratar em caso de erro/valor incorreto
    echo "Cor incorreta";
}
?>

<!-- switch case -->
<?php
echo "<hr>";
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) { // if dia
    case 0: // else
        echo "Domingo";
        break; // o break é extremamente importante para parar a execução e exibir/efetuar o comando
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}

echo ", ". $dataAtual = date("d/m/Y H:i:s"); //dd/mm/aaaa hh:mm:ss

?>

<?php
echo "<hr>";

$nome = "uninove";
echo "nome = $nome<br>";
echo "md5 = ". md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>hash = " . $hash;

?>