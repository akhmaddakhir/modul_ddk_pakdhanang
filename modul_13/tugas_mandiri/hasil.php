<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Hasil Pendaftaran</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 40px auto;
        max-width: 600px;
        padding: 20px;
      }

      .form-box {
        border: 1px solid #999;
        padding: 20px 30px;
      }

      .form-box h2 {
        text-align: center;
        color: #7b00cc;
        font-size: 18px;
        margin-bottom: 6px;
      }

      hr {
        border: none;
        border-top: 1px solid #ccc;
        margin-bottom: 16px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      td {
        padding: 6px 4px;
        font-size: 14px;
        vertical-align: top;
      }

      td:first-child {
        width: 130px;
        font-weight: bold;
      }

      td:nth-child(2) {
        width: 14px;
      }

      a {
        display: inline-block;
        margin-top: 16px;
        padding: 5px 14px;
        background: #f0f0f0;
        border: 1px solid #999;
        text-decoration: none;
        color: #222;
        font-size: 13px;
      }

      a:hover {
        background: #e0e0e0;
      }
    </style>
  </head>
  <body>

    <?php
      $nis    = htmlspecialchars($_POST["nis"]    ?? "-");
      $nama   = htmlspecialchars($_POST["nama"]   ?? "-");
      $kelas  = htmlspecialchars($_POST["kelas"]  ?? "-");
      $tgl    = htmlspecialchars($_POST["tgl"]    ?? "");
      $bln    = htmlspecialchars($_POST["bln"]    ?? "");
      $thn    = htmlspecialchars($_POST["thn"]    ?? "");
      $alamat = htmlspecialchars($_POST["alamat"] ?? "-");
      $kota   = htmlspecialchars($_POST["kota"]   ?? "-");
      $jk     = htmlspecialchars($_POST["jk"]     ?? "-");

      $tglLahir = ($tgl && $bln && $thn) ? "$tgl / $bln / $thn" : "-";

      $hobbyArr  = $_POST["hobby"]  ?? [];
      $ekskulArr = $_POST["ekskul"] ?? [];

      $hobby  = !empty($hobbyArr)  ? implode(", ", array_map("htmlspecialchars", $hobbyArr))  : "-";
      $ekskul = !empty($ekskulArr) ? implode(", ", array_map("htmlspecialchars", $ekskulArr)) : "-";
    ?>

    <div class="form-box">
      <h2>Hasil Pendaftaran Ekstrakurikuler</h2>
      <hr />

      <table>
        <tr>
          <td>NIS</td>
          <td>:</td>
          <td><?= $nis ?></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?= $nama ?></td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>:</td>
          <td><?= $kelas ?></td>
        </tr>
        <tr>
          <td>Tgl Lahir</td>
          <td>:</td>
          <td><?= $tglLahir ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?= $alamat ?></td>
        </tr>
        <tr>
          <td>Kota</td>
          <td>:</td>
          <td><?= $kota ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?= $jk ?></td>
        </tr>
        <tr>
          <td>Hobby</td>
          <td>:</td>
          <td><?= $hobby ?></td>
        </tr>
        <tr>
          <td>Pilihan Ekskul</td>
          <td>:</td>
          <td><?= $ekskul ?></td>
        </tr>
      </table>

      <a href="form.php">&larr; Kembali ke Form</a>
    </div>
  </body>
</html>