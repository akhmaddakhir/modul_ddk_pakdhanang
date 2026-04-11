<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Penghitung Diskon</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 40px auto;
        max-width: 500px;
        padding: 20px;
      }

      h2 {
        font-size: 18px;
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
        background: #f3f4f6;
        font-weight: bold;
      }

      .bold-row td {
        background: #f3f4f6;
        font-weight: bold;
      }

      td:first-child {
        width: 55%;
      }
    </style>
  </head>
  <body>
    <h2>Program Penghitung Diskon</h2>

    <?php
      $jumlahBayar = 120000;

      if ($jumlahBayar >= 500000) {
        $persen = 50;
      } elseif ($jumlahBayar >= 100000) {
        $persen = 10;
      } elseif ($jumlahBayar >= 50000) {
        $persen = 5;
      } else {
        $persen = 0;
      }

      $diskon      = $jumlahBayar * ($persen / 100);
      $totalBayar  = $jumlahBayar - $diskon;
    ?>

    <table>
      <tr class="header-row">
        <td colspan="2">Detail Pembayaran</td>
      </tr>
      <tr>
        <td>Jumlah Bayar</td>
        <td>: Rp <?= number_format($jumlahBayar, 0, ',', '.') ?></td>
      </tr>
      <tr>
        <td>Diskon</td>
        <td>: <?= $persen ?>%</td>
      </tr>
      <tr>
        <td>Potongan</td>
        <td>: Rp <?= number_format($diskon, 0, ',', '.') ?></td>
      </tr>
      <tr class="bold-row">
        <td>Total Bayar</td>
        <td>: Rp <?= number_format($totalBayar, 0, ',', '.') ?></td>
      </tr>
    </table>
  </body>
</html>