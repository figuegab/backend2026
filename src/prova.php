<?php

// $a=10;
// $b=20;
// $c=30;
// $d=40;
// $e=($a<$b)&&($c<$d); //true
// $f=!($a<$b)||!($c<$d); // false
// $g=!($a<$b)&&($c<$d); // false
// $h=!($a<$b)||($c<$d); // false
// echo $h;

// $a=10;$b=20;$c=30; 
// $d=($a<=$b)&&($c<=30); // ture
// $e=($b<=$a)||($c<=10); // false
// $f=($a==="10")?"OK":"Não OK"; // nao ok string
// $g=($b===20)?"OK":"Não OK"; // ok number

// $y=2;
// $z=3;
// $x = ($y + $z) % $y;
// echo "x = $x";

// $a=10;$b=20;$c=30;$d=40;
// $c+=50;
// $e=($a<$b)&&($c<$d);
// $f=!($a<$b)||!($c<$d);
// $g=!($a<$b)&&($c<$d);
// $h=!($a<$b)||($c<$d);

// echo $e."e<br>";
// echo $g."g<br>";
// echo $h."h<br>"; // nao entendi

// $a=10;$b=20;$c=30;$d=40;
// $a+=50;
// $e=($a<$b)&&($c<$d);
// $f=!($a<$b)||!($c<$d);
// $g=!($a<$b)&&($c<$d);
// $h=!($a<$b)||($c<$d);

// echo $f."f<br>";
// echo $g."g<br>";
// echo $h."h<br>";

// $y=2;
// $z=3;
// $x = $y + $z % $y;
// echo "x = $x";

for($i=0;$i<=12;$i+=2){echo "$i ";};

$naval=[
["água","submarino","água"],
["avião","água","água","ilha"],
["água","água","barco"],
["água","água","avião"],
["água","submarino","água"],
["veleiro","água","água"],
["água","água","barco"],
];

echo "<hr>";

echo $naval[3][2];

echo "<hr>";

for($i=0;$i<11;$i+=3){echo "$i ";}

echo "<hr>";

$naval=[
["água","submarino","água"],
["avião","água","água","ilha"],
["água","água","barco"],
["água","água","avião"],
["água","submarino","água"],
["veleiro","água","água"],
["água","água","barco"],
];

echo $naval[1][3];

echo "<hr>";

for($i=5;$i>1;$i--){echo "$i ";}

for($i=5;$i>0;$i--){echo "$i ";}

?>