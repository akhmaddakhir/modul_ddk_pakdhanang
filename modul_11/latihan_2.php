<?php
echo "<h1>Operator Assignment</h1><hr>";
$x = 10;
echo "Nilai awal x = $x <br><br>";

$a = $x;
$a += 5;
echo "x += 5 hasilnya $a <br>";

$b = $x;
$b -= 3;
echo "x -= 3 hasilnya $b <br>";

$c = $x;
$c *= 2;
echo "x *= 2 hasilnya $c <br>";

$d = $x;
$d /= 2;
echo "x /= 2 hasilnya $d <br>";

$e = $x;
$e %= 3;
echo "x %= 3 hasilnya $e <br>";

$f = $x;
$f **= 3;
echo "x **= 2 hasilnya $f <br>";

$teks = "Belajar";
$teks .= "PHP";
echo "<br>Operator .= $teks <br>";
?>