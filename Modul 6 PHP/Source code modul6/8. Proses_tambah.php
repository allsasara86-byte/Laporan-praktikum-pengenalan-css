<?php
// Validasi agar tidak error jika diakses langsung
if (!isset($_POST['nama'])) {
    header("Location: 6. index.php");
    exit();
}

include '5. koneksi.php';

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];

$sql = "INSERT INTO karyawan (nama, jabatan, email)
        VALUES ('$nama', '$jabatan', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: 6. index.php"); 
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>