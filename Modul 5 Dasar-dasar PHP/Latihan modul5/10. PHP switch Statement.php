<?php
$jabatan = "mahasiswa";

echo "<h3>Status Pengguna</h3>";

switch ($jabatan) {
    case "admin":
        echo "Selamat datang, Admin Sistem!";
        break;

    case "dosen":
        echo "Selamat datang, Dosen!";
        break;

    case "mahasiswa":
        echo "Selamat datang, Mahasiswa!";
        break;

    default:
        echo "Status pengguna tidak dikenali.";
}
?>