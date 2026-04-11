<?php
echo "<h1>Variabel dan Tipe Data</h1><br>";
$a = 5;
$b = 2.5;
$komentar = "Selamat Datang di pemrograman web";
$status = true;
$buah = ["Apel", "Jeruk", "Mangga"];
$kosong = null;
echo "Nilai variabel a adalah = $a <br>";
echo "Nilai variabel b adalah = $b <br>";
echo "Nilai variabel komentar adalah = $komentar <br>";
echo "<hr>";

echo "Nilai variabel status (boolean) adalah = ";
var_dump(value: $status);
echo "<br><br>";

echo "Isi variabe array buah adalah : <br>";
echo "<pre>";
print_r($buah);
echo "</pre>";

echo "Nilai variabel kosong adalah = ";
var_dump($kosong);
	?>