<?php
$kalimat = "Saya sedang belajar dasar PHP di STITEK Bontang";

echo "<h3>Manipulasi String</h3>";

echo "Kalimat Asli : " . $kalimat . "<br>";
echo "Jumlah Karakter : " . strlen($kalimat) . "<br>";
echo "Jumlah Kata : " . str_word_count($kalimat) . "<br>";
echo "Hasil Penggantian Kata : " . str_replace("dasar", "pemrograman", $kalimat);
?>