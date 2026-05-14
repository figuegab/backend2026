<?php

$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo"]; // array do tipo indexado 
$total = count($nomes); // conta quantos valores tem dentro da array

echo "Foram encontradas $total nomes no array.<br>"; // exibe esse valor do count

echo "Primeiro valor do array: ".$nomes[0]."<br>"; // exibe o valor na posição 0 da array

echo "Último valor do array: ".$nomes[count($nomes)-1]; // exibe o último valor da array pegando o último número - 1, que vai equivaler ao último valor
// count conta a partir do 1, enquanto no array o primeiro valor é 0

echo "<hr>";

for($i=0;$i<count($nomes);$i++){ // loop que exibe todos os valores dentro da array
	echo $nomes[$i]."<br>";
}
echo "<hr>";
?>

<?php

$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>";

array_push($uf, "TO");
array_push($uf, "BA");
array_push($uf, "RN"); // no codigo final o ultimo valor seria rn
array_push($uf, "PR");
array_pop($uf); // apaga o ultimo valor do array
echo "<pre>";print_r($uf);echo "</pre>"; // exibe na ordem em que foram gravados

sort($uf); // exibe ordenado alfabeticamente = order by
echo "<pre>";print_r($uf);echo "</pre>";

echo "<hr>";
?>

<?php

$estudante = [
    "id" => 1,
    "nome" => "Bete",
    "nota" => 9.5
];

// foreach($estudante as $valor){ // para cada valor da variavel etudante, adicione na variavel valor
foreach($estudante as $pos => $valor){ // vai exibir a posição na variavel valor
    // echo "$pos<br>";
    echo "$pos: $valor<br>";
}

echo "<hr>";
?>

<?php

$multi = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

for($i = 0; $i < 3; $i++){ // contador das linhas
    for($j = 0; $j < 3; $j++){ // contador das colunas
        echo $multi[$i][$j]. " ";
    }
    echo "<br>";
}

?>