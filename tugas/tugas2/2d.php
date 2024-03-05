<?php
$amount = 5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 2d</title>
  <style>
    .box {
      width: 50px;
      aspect-ratio: 1;
      text-align: center;
      line-height: 50px;
      border: 1px solid black;
    }

    .box-wrap {
      display: flex;
    }

    .white {
      background-color: white;
    }

    .black {
      background-color: black;
    }
  </style>
</head>

<body>
  <?php
  for ($awal = 0; $awal < $amount; $awal++) {
    echo "<div class=\"box-wrap\">";
    for ($j = 0; $j < $amount; $j++) {
      echo ($j + $awal) % 2 == 0 ? "<div class=\"box white\"></div>" : "<div class=\"box black\"></div>";
    }
    echo "</div>";
  }
  ?>
</body>

</html>