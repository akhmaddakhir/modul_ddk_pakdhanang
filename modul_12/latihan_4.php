<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan switch</title>
</head>

<body>
  <?php
  $nilai = 96;
  switch ($nilai) {
    case $nilai >= 86 && $nilai <= 100:
      $kategori = "A";
      $keterangan = "Sangat Baik";
      break;
    case $nilai >= 76 && $nilai <= 85:
      $kategori = "B";
      $keterangan = "Baik";
      break;
    case $nilai >= 66 && $nilai <= 75:
      $kategori = "C";
      $keterangan = "Cukup";
      break;
    case $nilai >= 0 && $nilai <= 65:
      $kategori = "D";
      $keterangan = "Kurang";
      break;
    default:
      $kategori = "-";
      $keterangan = "Nilai diluar nalar";
  }
  echo "Nilai Anda: $nilai<br>";
  echo "Kategori Nilai Anda: $kategori<br>";
  echo "Keterangan: $keterangan";
  ?>
</body>

</html>