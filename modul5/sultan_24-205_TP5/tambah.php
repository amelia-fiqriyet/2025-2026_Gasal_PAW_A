<?php
$conn = mysqli_connect("localhost", "root", "", "penjualan");
if (!$conn) die("Koneksi gagal: " . mysqli_connect_error());

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama']; $telp = $_POST['telp']; $alamat = $_POST['alamat'];
    $sql = "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama','$telp','$alamat')";
    if (mysqli_query($conn, $sql)) header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Tambah Supplier</h2>
<form method="post">
    <label>Nama:</label>
    <input type="text" name="nama" required>
    <label>Telepon:</label>
    <input type="text" name="telp" required>
    <label>Alamat:</label>
    <textarea name="alamat" required></textarea>
    <input type="submit" name="simpan" value="Simpan">
    <a href="index.php" class="back">Kembali</a>
</form>
</body>
</html>
