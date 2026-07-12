<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id_produk = $_GET['id'];

// Ambil data produk berdasarkan ID
$stmt = mysqli_prepare($koneksi, "SELECT * FROM produk WHERE id_produk = ?");
mysqli_stmt_bind_param($stmt, "i", $id_produk);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    header("Location: index.php");
    exit();
}

// Proses pembaruan data
if (isset($_POST['update'])) {
    $nama_produk = trim($_POST['nama_produk']);
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];

    $update_stmt = mysqli_prepare($koneksi, "UPDATE produk SET nama_produk = ?, harga = ?, stok = ? WHERE id_produk = ?");
    mysqli_stmt_bind_param($update_stmt, "siii", $nama_produk, $harga, $stok, $id_produk);

    if (mysqli_stmt_execute($update_stmt)) {
        header("Location: index.php");
        exit();
    } else {
        $error = "Gagal memperbarui data.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Data Produk</h4>
            </div>
            <div class="card-body">
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?= $error; ?></div>
                <?php endif; ?>

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= htmlspecialchars($data['nama_produk']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga (Rp)</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="<?= $data['harga']; ?>" min="0" required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?= $data['stok']; ?>" min="0" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" name="update" class="btn btn-warning">Update Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>