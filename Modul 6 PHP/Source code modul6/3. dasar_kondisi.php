<!DOCTYPE html>
<html>
<head>
    <title>Kondisi PHP</title>
</head>
<body>

<h2>Hasil Nilai Mahasiswa</h2>

<?php
$nilai = 88;

echo "Nilai Anda : " . $nilai . "<br><br>";

if ($nilai >= 90) {
    echo "Predikat : Sangat Baik";
} elseif ($nilai >= 80) {
    echo "Predikat : Baik";
} elseif ($nilai >= 70) {
    echo "Predikat : Cukup";
} else {
    echo "Predikat : Kurang";
}
?>

</body>
</html>