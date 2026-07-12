<?php
// Data produk
$nama_produk = "Laptop ASUS";   // String
$harga = 8500000;               // Integer
$rating = 4.8;                  // Float
$stok = true;                   // Boolean

echo "<h3>Data Produk</h3>";

echo "Nama Produk : " . $nama_produk . "<br>";
echo "Harga : Rp " . number_format($harga, 0, ',', '.') . "<br>";

echo "<br><b>Informasi Rating:</b><br>";
var_dump($rating);

echo "<br><br><b>Status Stok:</b><br>";
var_dump($stok);
?>