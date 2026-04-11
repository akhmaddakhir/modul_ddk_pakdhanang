<?php
echo "<h1>Variasi Konversi Tipe Data</h1><br>";
$harga = "750.85 Rupiah";
echo "<b>1. Explicit Casting: </b><br>";
echo "Data Awal (String): $harga<br>";
$floatHarga = (float) $harga;
echo "Hasil (float): $floatHarga <br><br>";

echo "<b>2. Konversi Otomatis (Implicit):</b><br>";
$angkaString = "10";
$angkaInteger = 5;
$total = $angkaString + $angkaInteger;
echo "String '10' + Integer 5 = $total (Tipe: " . gettype($total) . ")";

echo "<br><br><b>3. Menggunakan settype():</b><br>";
$bayar = "500.77 Rupiah";
settype($bayar, "double");
echo "Tipe Data Double: $bayar <br>";
settype($bayar, "integer");
echo "Tipe Data Integer: $bayar <br>";
?>