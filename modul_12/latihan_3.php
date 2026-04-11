<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan if-elseif</title>
</head>

<body>
  <?php
  $nilai = 86;
  if ($nilai >= 86 && $nilai <= 100) {
    $kategori = "A";
    $keterangan = "Sangat Baik";
  } elseif ($nilai >= 76 && $nilai <= 85) {
    $kategori = "B";
    $keterangan = "Baik";
  } elseif ($nilai >= 66 && $nilai <= 75) {
    $kategori = "C";
    $keterangan = "Cukup";
  } elseif ($nilai >= 0 && $nilai <= 65) {
    $kategori = "D";
    $keterangan = "Kurang";
  } else {
    $kategori = "-";
    $keterangan = "Nilai diluar nalar";
  }
  echo "Nilai Anda: $nilai<br>";
  echo "Kategori Nilai Anda: $kategori<br>";
  echo "Keterangan: $keterangan";
  ?>
</body>

</html>