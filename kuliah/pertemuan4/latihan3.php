<?php

function cetak_angka($k) {
    for ($i = 1; $i <= $k; $i++) {
        for($j = 1; $j <= $i; $j++){
            echo "$i";
        }
        echo "<br>";
    }
}
cetak_angka(10);
echo "<hr>";