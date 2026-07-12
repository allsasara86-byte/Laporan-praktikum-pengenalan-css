v<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_produk = $_GET['id'];

    $stmt = mysqli_prepare($koneksi, "DELETE FROM produk WHERE id_produk = ?");
    mysqli_stmt_bind_param($stmt, "i", $id_produk);
    mysqli_stmt_execute($stmt);
}

header("Location: index.php");
exit();
?>