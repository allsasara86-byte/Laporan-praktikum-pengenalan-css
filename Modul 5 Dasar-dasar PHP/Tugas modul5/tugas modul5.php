<?php
// ==========================================
// TUGAS MODUL 5 - BUKU TAMU DIGITAL
// Mata Kuliah: Pemrograman Web
// STITEK Bontang
// ==========================================

// Inisialisasi variabel untuk menyimpan data input dan pesan error
$nama = $email = $pesan = "";
$error = "";
$sukses = false;

// Memproses data hanya jika form dikirimkan menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Validasi Server-Side: Memastikan tidak ada kolom yang kosong
    if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["pesan"])) {
        $error = "Semua kolom input wajib diisi! Jangan ada yang kosong.";
    } else {
        // 2. Keamanan: Menggunakan htmlspecialchars() untuk mencegah serangan XSS
        $nama  = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);
        $pesan = htmlspecialchars($_POST["pesan"]);
        $sukses = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        /* Desain dan Styling CSS Internal */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        header {
            text-align: center;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        header h1 {
            margin: 0;
            color: #0056b3;
            font-size: 24px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        button {
            background-color: #0056b3;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #004085;
        }
        .alert {
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .result-box {
            margin-top: 30px;
            background: #eef1f7;
            padding: 20px;
            border-left: 5px solid #0056b3;
            border-radius: 4px;
        }
        .result-box h3 {
            margin-top: 0;
            color: #0056b3;
        }
        .result-item {
            margin-bottom: 10px;
            font-size: 15px;
        }
        .result-item strong {
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- 1. Header -->
    <header>
        <h1>Buku Tamu Digital STITEK Bontang</h1>
    </header>

    <!-- Menampilkan Pesan Error jika Validasi Gagal -->
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <!-- Menampilkan Pesan Sukses jika Berhasil -->
    <?php if ($sukses): ?>
        <div class="alert alert-success">
            Terima kasih! Pesan Anda telah berhasil dikirim.
        </div>
    <?php endif; ?>

    <!-- 2. Form Input (Self-Processing dengan POST) -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" value="<?php echo isset($_POST['nama']) && !$sukses ? htmlspecialchars($_POST['nama']) : ''; ?>">
        </div>

        <div class="form-group">
            <label for="email">Alamat Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) && !$sukses ? htmlspecialchars($_POST['email']) : ''; ?>">
        </div>

        <div class="form-group">
            <label for="pesan">Pesan / Komentar:</label>
            <textarea id="pesan" name="pesan"><?php echo isset($_POST['pesan']) && !$sukses ? htmlspecialchars($_POST['pesan']) : ''; ?></textarea>
        </div>

        <button type="submit">Kirim Pesan</button>
    </form>

    <!-- 3. Area Tampilan Data (Hanya muncul jika input valid) -->
    <?php if ($sukses): ?>
        <div class="result-box">
            <h3>Data Tamu Terbaru:</h3>
            <div class="result-item"><strong>Nama:</strong> <?php echo $nama; ?></div>
            <div class="result-item"><strong>Email:</strong> <?php echo $email; ?></div>
            <div class="result-item"><strong>Pesan:</strong> <br><?php echo nl2br($pesan); ?></div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>