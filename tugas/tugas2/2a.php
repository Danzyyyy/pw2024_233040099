<?php
$depan = 'Tubagus';
$belakang = 'Muhammad Wildan';

for ($awal = 1; $awal <= 100; $awal++) {
  if ($awal % 3 === 0 && $awal % 5 === 0) {
    echo "$depan $belakang <br>";
  } else if ($awal % 3 === 0) {
    echo "$depan <br>";
  } else if ($awal % 5 === 0) {
    echo "$belakang <br>";
  } else {
    echo "$awal <br>";
  }
}

echo ". <br>";
echo ". <br>";
echo ". <br>";