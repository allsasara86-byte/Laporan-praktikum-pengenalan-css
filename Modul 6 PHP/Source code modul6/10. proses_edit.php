<?php
// Validasi agar tidak error jika diakses langsung
if (!isset($_POST['id'])) {
    header("Location: 6. index.php");
    exit();
}

include '5. koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];

$sql = "UPDATE karyawan
        SET nama='$nama',
            jabatan='$jabatan',
            email='$email'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: 6. index.php"); 
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>