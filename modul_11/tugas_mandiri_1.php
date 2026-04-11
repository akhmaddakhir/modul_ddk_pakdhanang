<?php
$nis = "2026001";
$nama = "GALANG";
$nilaiTugas = 85;
$nilaiUTS = 80;
$nilaiUAS = 90;

$total = $nilaiTugas + $nilaiUTS + $nilaiUAS;
$rataRata = $total / 3;
?>

<!doctype html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Program Pengolahan Nilai Siswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px auto;
      max-width: 600px;
      padding: 20px;
    }

    h2 {
      font-size: 20px;
      margin-bottom: 16px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 14px;
    }

    td {
      border: 1px solid #ccc;
      padding: 8px 12px;
    }

    .header-row td {
      background: #4caf50;
      font-weight: bold;
    }

    .bold-row td {
      background: #f3f4f6;
      font-weight: bold;
    }

    td:first-child {
      width: 50%;
    }
  </style>
</head>

<body>
  <h2>Program Pengolahan Nilai Siswa</h2>
  <table>
    <tr class="header-row">
      <td colspan="2">Laporan Hasil Belajar</td>
    </tr>
    <tr>
      <td>NIS</td>
      <td>: <?= $nis ?></td>
    </tr>
    <tr>
      <td>Nama Siswa</td>
      <td>: <?= $nama ?></td>
    </tr>
    <tr>
      <td>Nilai Tugas</td>
      <td>: <?= $nilaiTugas ?></td>
    </tr>
    <tr>
      <td>Nilai UTS</td>
      <td>: <?= $nilaiUTS ?></td>
    </tr>
    <tr>
      <td>Nilai UAS</td>
      <td>: <?= $nilaiUAS ?></td>
    </tr>
    <tr class="bold-row">
      <td>Total Nilai</td>
      <td>: <?= $total ?></td>
    </tr>
    <tr class="bold-row">
      <td>Rata-rata Nilai</td>
      <td>: <?= number_format($rataRata, 2) ?></td>
    </tr>
  </table>
</body>

</html>