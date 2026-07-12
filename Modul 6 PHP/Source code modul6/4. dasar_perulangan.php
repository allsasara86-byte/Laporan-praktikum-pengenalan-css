<!DOCTYPE html>
<html>
<head>
    <title>Perulangan PHP</title>
</head>
<body>

<h2>Daftar Mata Kuliah</h2>

<ul>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<li>Mata Kuliah ke-$i</li>";
}
?>
</ul>

</body>
</html>