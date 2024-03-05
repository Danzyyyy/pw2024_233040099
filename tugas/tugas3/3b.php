<?php

function urutanAngka($angka) {
    $j = 1;
    for ($i = 0; $i <= $angka; $i++){
        for ($k = 1; $k <= $i; $k++){
            echo $j . " ";
            $j++;
        }
        echo "<br>";
    }
}

urutanAngka(5);