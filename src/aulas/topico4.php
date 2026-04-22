<?php

$a = 2;
$b = 5;

echo "1. Operadores matemáticos";
echo "<br>Adição: ".($a + $b);
echo "<br>Subtração: ".($a - $b);
echo "<br>Multiplicação: ".($a * $b);
echo "<br>Divisão: ".($a / $b);
echo "<br>Módulo: ".($a % $b); // Resto da divisão
echo "<br>Exponenciação: ".($a ** $b);

echo "<hr>";

echo "2. Operadores de atribuição";
// declaração de variáveis
$a=10;
$b=2;
// definindo as variáveis
$a+=$b; // a + b e o resultado será definido na variável a (a esquerda do operador =)
$b-=5;

echo "<br>Primeiro número ".$a;
echo "<br>Segundo número ".$b;
echo "<br>a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d;
$d+=$a;
echo "<br>c = ".$c;
echo "<br>d = ".$d;

echo "<hr>3. Operadores de string";
$nome = "<br>Bete";
echo $nome.$d;
$c.= "cinco";
echo "<br> c = $c"; //concatenando a variavel c anterior com a atribuida depois

echo "<hr>4. Operadores de Incremento/Decremento<br>";

$x = 100;

// "x = ".$x++; incrementa antes e exibe na pagina
echo "x = ".$x++; // exibiu numero anterior e incrementou
echo "<br>x final = ".$x; // numero final pos incremento

$i = 10;
echo "<br>i = $i";
$i++; //11
$i++; //12
++$i;//13
echo "<br>i = $i";
$i--; //12
--$i; //11
echo "<br>i = $i";

// Operadores de comparação
echo "<hr> 5. Operadores de Comparação<br>";
$a=10; // número
$b="10"; // string
echo "Igualdade = ".($a==$b)."<br>"; // são iguais? true
echo "Idêntico = ".($a===$b)."<br>"; // são idênticas? false, 
echo "Não igual = ".($a!=$b)."<br>"; // são diferentes? = 10 number = 10 string = true => false
echo "Não Idêntico = ".($a!==$b)."<br>"; // são idênticos? valor = valor? true => inteiro = string = falso => verdadeiro

echo "<hr>6. Operadores Lógicos<br>";
$c = 20;
$d = 40;
$e = 500;
$f = ($c > $d); // var c é maior que var d? falso -> ! negação ! antes da expressão nega a expressão
var_dump($f);

echo "<hr>E - and - &&<br>";
$g = ($c < $e) && ($e > 1000); //c < e = true, e > 1000 = false
var_dump($g);

echo "<hr>Ou - or - ||<br>";
$f = ($c < $e) || ($e > 1000); // se alguma das expressões for verdadeira o resultado final sera verdadeiro = true
var_dump($f);

echo "<hr>Xor<br>";
echo "Só será verdadeiro quando as operações forem diferentes";

echo "<hr>7. Operador ternário<br>";
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "Verdadeiro" : "Falso"; // variável a é menor ou igual variável b? se sim, se tornará "Verdadeiro", se não, se tornará "Falso"
// verdadeiro
$e=($a>=$c) ? "Verdadeiro" : "Falso"; // a é maior ou igual c? falso
// falso
echo "d = $d<br>e = $e";

?>