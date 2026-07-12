<?php
// Validasi agar tidak error jika diakses langsung
if (!isset($_GET['id'])) {
    header("Location: 6. index.php");
    exit();
}

include '5. koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM karyawan WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: 6. index.php"); 
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>