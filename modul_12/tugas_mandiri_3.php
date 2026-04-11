<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Pola Perulangan</title>
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

        h3 {
            font-size: 15px;
            margin: 24px 0 8px;
        }

        pre {
            border: 1px solid #ccc;
            padding: 12px 16px;
            border-radius: 4px;
            background: #f9fafb;
            font-size: 14px;
            line-height: 1.8;
            margin: 0;
        }
    </style>
</head>

<body>
    <h2>Pola Perulangan</h2>

    <h3>Pola Bintang (naik)</h3>
    <pre><?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
    ?></pre>

    <h3>Dan</h3>
    <pre><?php
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
    ?></pre>

    <h3>Pola Angka (turun)</h3>
    <pre><?php
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
            if ($j < $i)
                echo " ";
        }
        echo "\n";
    }
    ?></pre>

    <h3>Dan</h3>
    <pre><?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
            if ($j < $i)
                echo " ";
        }
        echo "\n";
    }
    ?></pre>

</body>

</html>