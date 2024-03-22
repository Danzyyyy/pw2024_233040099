<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6A</title>
    <style>
        h1 {
            text-align: center;
            color: red;
        }
        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            display: flex;
            margin: 2px;
        }

        .box h2 {
            margin: auto;
        }


        .row {
            display: flex;
        }

        .row1 {
            .box {
                background-color: lightblue;
            }
        }

        .row2 {
            .box {
                background-color: violet;
                color: black;
            }
        }
    </style>
</head>
<body>
    <?php if(!isset($_GET["angka"])) : ?>
        <h1>Variable Angka Belum Dimasukkan Ke Dalam URL</h1>
    <?php else : ?>
        <?php for ($i = $_GET["angka"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 === 0) : ?>
                <div class="row row1">
            <?php else : ?>
                <div class="row row2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <div class="box"><h2><?= "$i" ?></h2></div>
                <?php endfor ; ?>
                    <br>            
        </div>
        <?php endfor ; ?>
    <?php endif; ?>
</body>
</html>