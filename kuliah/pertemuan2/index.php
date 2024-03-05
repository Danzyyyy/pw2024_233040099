<?php 
//  Pertemuan 2 - PHP Dasar
//  Sintaks PHP

//  Standar Output
//  echo, print
// print_r
// var_dump

// echo "Tubagus Muhammad Wildan";
// print "Tubagus Muhammad Wildan";
// print_r("Tubagus Muhammad Wildan");
// var_dump("Tubagus Muhammad Wildan");
// echo 123;
// echo true;
// echo false;
// echo "Jum'at";

//  Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
//  tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Tubagus Muhammad Wildan";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// = - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Tubagus";
// $nama_belakang = "Muhammad Wildan";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, 5=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Tubagus";
// $nama .= " ";
// $nama .= "Muhammad Wildan";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>