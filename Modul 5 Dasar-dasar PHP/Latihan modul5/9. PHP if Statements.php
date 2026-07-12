<?php
$nilai = 90;

echo "<h3>Hasil Penilaian</h3>";

if ($nilai >= 85) {
    echo "Nilai Anda : $nilai <br>";
    echo "Predikat : Sangat Baik (A)";
} elseif ($nilai >= 75) {
    echo "Nilai Anda : $nilai <br>";
    echo "Predikat : Baik (B)";
} else {
    echo "Nilai Anda : $nilai <br>";
    echo "Predikat : Cukup (C)";
}
?>