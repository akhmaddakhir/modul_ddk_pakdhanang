<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Bilangan Bulat Positif</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 40px auto;
        max-width: 600px;
        padding: 20px;
      }

      h2 {
        font-size: 18px;
        margin-bottom: 16px;
      }

      .output {
        border: 1px solid #ccc;
        padding: 12px 16px;
        border-radius: 4px;
        background: #f9fafb;
        line-height: 1.8;
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <h2>Bilangan Bulat Positif (pertambahan 2, sampai 100)</h2>
    <div class="output">
      <?php
        for ($i = 2; $i <= 100; $i += 2) {
          echo $i;
          if ($i < 100) echo ", ";
        }
      ?>
    </div>
  </body>
</html>