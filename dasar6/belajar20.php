<?php
// membuat array kosong
$mahasiswa = array();
$kelas = [];
 
// membuat array sekaligus mengisinya
$mahasiswa = array("Nasywa", "Sabrina", "Kisi", "Sheva");
$kelas = [1, 2, 3, 4];
 
// membuat array dengan mengisi indeks tertentu
$mahasiswa[0] = "Nasywa";
$mahasiswa[1] = "Sabrina";
$mahasiswa[2] = "Kisi";
$mahasiswa[3] = "Sheva";
 
var_dump($mahasiswa);
echo "<br>";
var_dump($kelas);
 
?>