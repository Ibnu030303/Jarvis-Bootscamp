<?php

//$tring
$nama ='Ibnu Nurdiyansaa';
echo "Hallo nama saya $nama";
echo "<br>";
echo str_replace("Ibnu", "Dian", $nama);
echo "<br><br>";

//integer

$umur = 20;

echo $umur - 3 . "<br>";
var_dump($umur);
echo "<br><br>";

//float
$nilai = 3.72;
var_dump($nilai);
echo "<br><br>";

//bolean
$is_student = true;
var_dump($is_student);
echo "<br><br>";

//array biasa
$mahasiswa1 = ["Ibnu", 20, 3.72, false];
var_dump($mahasiswa1);
echo "<br><br>";
echo "umur saya $mahasiswa1[1]";
echo "<br><br>";

//array Asosiatif
$mahasiswa2 = [
    "nama" => "Ibnu",
    "umur" => 20,
    "nilai" => 3.72,
    "is_active" => true
];

var_dump($mahasiswa2);
echo "<br>";
echo "Helo saya" . $mahasiswa2['nama'];
