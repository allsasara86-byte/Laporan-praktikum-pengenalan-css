<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
</head>
<body>

<h2>Form Data Mahasiswa</h2>

<form method="post" action="">
    Nama:
    <input type="text" name="nama"><br><br>

    Email:
    <input type="email" name="email"><br><br>

    <input type="submit" value="Kirim">
</form>

<br>

<?php
if (isset($_POST['nama']) && isset($_POST['email'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h3>Hasil Input</h3>";
    echo "Nama : " . $nama . "<br>";
    echo "Email : " . $email;
}
?>

</body>
</html>