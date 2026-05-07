<?php 

$a = 10;
$a = 20;
echo "A = $a";

echo "<hr>";

$array = [30, 10, 5];
echo "Array 1 = ".$array[0];
echo "<br> Array 2 = ".$array[1];
echo "<br> Array 3 = ".$array[2];

echo "<hr>";

$uf = ["SP", "RJ", "MG", "ES"];
echo "UF = ".$uf[2]."<br>";
print_r($uf);
echo "<pre>"; print_r($uf); echo "</pre>";

echo "<hr>";

$estudante = [
    "id" => 1,
    "ra" => 12345,
    "nome" => "Bete",
    "curso" => "TADS"
];

echo "<br>id: ".$estudante["id"];
echo "<br>ra: ".$estudante["ra"];
echo "<br>nome: ".$estudante["nome"];
echo "<br>curso: ".$estudante["curso"];

echo "<pre>"; print_r($estudante); echo "</pre>";

echo "<hr>";
$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];
echo $matriz[1][2];

echo "<hr>";
$matriz = [
    [10, "navio", 30],
    [40, "bote", 60],
    ["água", 80, "avião"]
];
echo $matriz[2][0]."<br>";
echo $matriz[0][1]."<br>";
echo $matriz[1][1]."<br>";
echo $matriz[2][2]."<br>";
// echo "<pre>"; print_r($matriz); echo "</pre>";

echo "<hr>";
$bd = [
    ["id" => 1, "nome" => "bete", "curso" => "TADS"],
    ["id" => 2, "nome" => "cleide", "curso" => "TBSD"],
    ["id" => 3, "nome" => "beto", "curso" => "TJD"]
];
echo $bd[1]["id"]."<br>";
echo $bd[2]["curso"]."<br>";
echo $bd[0]["nome"]."<br>";

?>