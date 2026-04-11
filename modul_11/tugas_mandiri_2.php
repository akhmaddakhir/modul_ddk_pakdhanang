<?php
  $alas      = 6;
  $tinggi    = 8;
  $sisi      = 5;
  $panjang   = 10;
  $lebar     = 4;
  $jariJari  = 7;
  $pi        = M_PI;

  $miringSegitiga = sqrt(($alas ** 2) + ($tinggi ** 2));

  $luasSegitiga      = 0.5 * $alas * $tinggi;
  $kelilingSegitiga  = $alas + $tinggi + $miringSegitiga;

  $luasPersegi       = $sisi ** 2;
  $kelilingPersegi   = 4 * $sisi;

  $luasPersegiPanjang      = $panjang * $lebar;
  $kelilingPersegiPanjang  = 2 * ($panjang + $lebar);

  $luasLingkaran      = $pi * ($jariJari ** 2);
  $kelilingLingkaran  = 2 * $pi * $jariJari;
?>

<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program Luas dan Keliling Bangun Datar</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 40px auto;
        max-width: 650px;
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
        margin-bottom: 24px;
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
    <h2>Program Luas dan Keliling Bangun Datar</h2>

    <table>
      <tr class="header-row">
        <td colspan="2">Segitiga Siku-Siku (alas=<?= $alas ?>, tinggi=<?= $tinggi ?>)</td>
      </tr>
      <tr>
        <td>Luas</td>
        <td>: <?= number_format($luasSegitiga, 2) ?></td>
      </tr>
      <tr class="bold-row">
        <td>Keliling</td>
        <td>: <?= number_format($kelilingSegitiga, 2) ?></td>
      </tr>
    </table>

    <table>
      <tr class="header-row">
        <td colspan="2">Persegi (sisi=<?= $sisi ?>)</td>
      </tr>
      <tr>
        <td>Luas</td>
        <td>: <?= number_format($luasPersegi, 2) ?></td>
      </tr>
      <tr class="bold-row">
        <td>Keliling</td>
        <td>: <?= number_format($kelilingPersegi, 2) ?></td>
      </tr>
    </table>

    <table>
      <tr class="header-row">
        <td colspan="2">Persegi Panjang (panjang=<?= $panjang ?>, lebar=<?= $lebar ?>)</td>
      </tr>
      <tr>
        <td>Luas</td>
        <td>: <?= number_format($luasPersegiPanjang, 2) ?></td>
      </tr>
      <tr class="bold-row">
        <td>Keliling</td>
        <td>: <?= number_format($kelilingPersegiPanjang, 2) ?></td>
      </tr>
    </table>

    <table>
      <tr class="header-row">
        <td colspan="2">Lingkaran (jari-jari=<?= $jariJari ?>)</td>
      </tr>
      <tr>
        <td>Luas</td>
        <td>: <?= number_format($luasLingkaran, 2) ?></td>
      </tr>
      <tr class="bold-row">
        <td>Keliling</td>
        <td>: <?= number_format($kelilingLingkaran, 2) ?></td>
      </tr>
    </table>
  </body>
</html>