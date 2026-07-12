<!DOCTYPE html>
<html>
<head>
    <title>Superglobals PHP</title>
</head>
<body>

    <form method="post" action="14_superglobals.php">
        Nama :
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <br>

    <?php
    if (isset($_POST['nama'])) {

        $nama = htmlspecialchars($_POST['nama']);

        echo "Halo, " . $nama . "!";
    }
    ?>

</body>
</html>