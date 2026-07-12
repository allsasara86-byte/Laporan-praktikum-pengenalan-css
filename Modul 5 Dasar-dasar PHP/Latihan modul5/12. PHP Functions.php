<?php
function hitungTotal($harga, $diskon) {
    $potongan = $harga * $diskon / 100;
    return $harga - $potongan;
}

$harga_barang = 250000;
$total_bayar = hitungTotal($harga_barang, 20);

echo "<h3>Perhitungan Diskon</h3>";
echo "Harga Barang : Rp " . $harga_barang . "<br>";
echo "Diskon : 20%<br>";
echo "Total Bayar : Rp " . $total_bayar;
?>