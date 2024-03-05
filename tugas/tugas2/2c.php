<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 2c</title>
  <style>
    .kotak {
      width: 50px;
      aspect-ratio: 1;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      border: 1px solid black;
    }

    .box-wrap {
      display: flex;
    }
  </style>
</head>

<body>
  <?php
  for ($awal = 10; $awal >= 1; $awal--) {
    echo "<div class=\"box-wrap\">";
    for ($j = 1; $j <= $awal; $j++) {
      echo "<div class=\"kotak\">$j</div>";
    }
    echo "</div>";
  }
  ?>

</body>

</html>