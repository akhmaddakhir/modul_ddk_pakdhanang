<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan for</title>
</head>

<body>
  <?php
  $brush_price = 5;
  echo "<table border=\"1\" align=\"center\">";
  echo "<tr><th>Quantity</th>";
  echo "<th>Price</ th></tr>";
  for ($counter = 10; $counter <= 100; $counter += 5) {
    echo "<tr><td>";
    echo " $counter";
    echo "</td><td>";
    echo $brush_price * $counter;
    echo "</td></tr>";  
  }
  echo "</table>"; ?>
</body>

</html>