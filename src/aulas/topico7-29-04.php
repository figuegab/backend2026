<?php

echo "<h1>While</h1>";
$i = 0;

while ($i <= 10) { // verifica condição primeiro e executa depois
    echo " $i";
    $i+=2;
}

/*

Saída: 0 1 2 3 4
1) Valor inicial
0
2) Condição
Enquanto o valor da variável for menor que 5
3) Contador
i++ => variável incrementa
4) Quantas vezes o looping foi executado
5 vezes
5) Valor que torna a condição como falsa
5 => 5 < 5? falso

---------------------

Saída: 11 12 13 14
1) 11
2) i <= 14
3) i++
4) 4
5) 15

---------------------

Saída: 4 3 2 1 0
1) 4
2) $i >= 0
3) i--
4) 5
5) -1

---------------------

Saída: 0 2 4 6 8 10
1) 0
2) i <= 10
3) i += 2
4) 6
5) 11

*/

echo "<hr> <h1> Do While</h1>";

$a = 0;

do {
    echo " $a";
    $a++;
} while ($a < 5); // do while executa o comando pelo menos uma vez antes de verificar


/*
Saída: 0 1 2 3 4
1) 0
2) $a < 5
3) $a++
4) 1 ou seja, incrementou 5 vezes antes de executar
5) 5

*/

echo "<hr> <h1> For </h1>";

for($b = 0; $b < 5; $b++) { // declaração de variavel => condição => contador
    echo " $b";
}

echo "<hr> <h1> Looping aninhado </h1>"; // looping dentro do outro

// a cada vez que o looping externo roda, o looping interno roda todas as vezes
for ($c = 3; $c < 5; $c++){ // looping externo
    for ($d = 0; $d < 3; $d++){ // looping interno
        echo "$c $d <br>";
    }
}

/*

Saída:
c d
0 0
0 1
1 0
1 1
2 0
2 1
1)
2)
3)
4)
5)

*/

?>