<!DOCTYPE html>
<html>
<head>
    <title>Praktikum PHP - Basic Syntax</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            margin-top: 100px;
        }

        .container {
            background: white;
            width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h1 {
            color: #0066cc;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Praktikum Dasar PHP</h1>

        <?php
            echo "<p>Halo, Dunia!</p>";
            echo "<p>Nama : Allsasara</p>";
            echo "<p>NIM : 202413007</p>";
            echo "<p>Program Studi : Sistem Informasi</p>";
            echo "<p>Selamat Belajar PHP!</p>";
            echo "<p>Tanggal : " . date("d-m-Y") . "</p>";
        ?>
    </div>

</body>
</html>