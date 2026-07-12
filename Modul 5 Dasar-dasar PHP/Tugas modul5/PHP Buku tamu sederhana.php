<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }

        .container{
            width:500px;
            margin:30px auto;
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            color:#003366;
        }

        label{
            font-weight:bold;
        }

        input[type=text],
        input[type=email],
        textarea{
            width:100%;
            padding:8px;
            margin-top:5px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        textarea{
            height:100px;
        }

        button{
            background:#007bff;
            color:white;
            padding:10px 20px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#0056b3;
        }

        .error{
            margin-top:20px;
            padding:10px;
            background:#ffd6d6;
            color:red;
            border-radius:5px;
        }

        .hasil{
            margin-top:20px;
            padding:15px;
            background:#e8f5e9;
            border-radius:5px;
        }

    </style>
</head>
<body>

<div class="container">

<h2>Buku Tamu Digital STITEK Bontang</h2>

<form method="post" action="">

<label>Nama Lengkap</label>
<input type="text" name="nama">

<label>Alamat Email</label>
<input type="email" name="email">

<label>Pesan / Komentar</label>
<textarea name="pesan"></textarea>

<button type="submit">Kirim Pesan</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $nama=htmlspecialchars(trim($_POST["nama"]));
    $email=htmlspecialchars(trim($_POST["email"]));
    $pesan=htmlspecialchars(trim($_POST["pesan"]));

    if(empty($nama) || empty($email) || empty($pesan)){

        echo "<div class='error'>";
        echo "<b>Semua data wajib diisi!</b>";
        echo "</div>";

    }else{

        echo "<div class='hasil'>";

        echo "<h3>Pesan Berhasil Dikirim</h3>";

        echo "<p><b>Nama Lengkap :</b> $nama</p>";

        echo "<p><b>Email :</b> $email</p>";

        echo "<p><b>Pesan :</b><br>$pesan</p>";

        echo "</div>";

    }

}

?>

</div>

</body>
</html>