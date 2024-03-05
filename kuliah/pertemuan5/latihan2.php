<?php
$animals = ["🐱", "🦁", "🐵", "🐢", "🐼"];
$foods = ["🍜","🍕","🍔","🍌","🍎"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <h3>Daftar Binatang</h3>
    <ol>
        <?php for($i = 0; $i < count($animals); $i++) { ?>
        <li><?php echo $animals[$i]; ?></li>
        <?php } ?>
    </ol>

    <h3>Daftar Makanan</h3>
    <ul>
        <?php for ($i = 0; $i < count($foods); $i++) { ?>
        <li><?php echo $foods[$i]; ?></li>
        <?php } ?> 
    </ul>

    <hr>

    <h3>Daftar Binatang</h3>
    <ol>
        <?php
            foreach ($animals as $a) :
                echo "<li>$a</li>";
            endforeach?>
    </ol>

    <hr>

    <h3>Daftar Makanan</h3>
    <ol>
        <?php
            foreach ($foods as $f):
                echo "<li>$f</li>";
            endforeach
    ?>
    </ol>
    
</body>
</html>