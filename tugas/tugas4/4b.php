<?php

$hw = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Array</title>
</head>
<body>
    <h4>Macam-macam perangkat keras komputer</h4>
    <ol>
        <?php

            foreach ($hw as $k) {
                echo "<li>$k</li>";
            }
            ?>
    </ol>

    <?php
    $hw[] = "Card Reader";
    $hw[] = "Modem";
    sort($hw);
    ?>

    <h4>Macam-macam perangkat keras komputer baru</h4>
    <ol>
        <?php
            foreach ($hw as $h) {
                echo "<li>$h</li>";
            }
            ?>
    </ol>
</body>
</html>