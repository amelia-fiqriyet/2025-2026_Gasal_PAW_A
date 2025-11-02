<?php
$conn = mysqli_connect("localhost", "root", "", "penjualan");
if (!$conn) die("Koneksi gagal: " . mysqli_connect_error());

$id = $_GET['id'] ?? 0;
$q = mysqli_query($conn, "SELECT * FROM supplier WHERE id=$id");
$data = mysqli_fetch_assoc($q);
if (!$data) die("Data tidak ditemukan. <a href='index.php'>Kembali</a>");

if (isset($_POST['update'])) {
    $nama = $_POST['nama']; $telp = $_POST['telp']; $alamat = $_POST['alamat'];
    mysqli_query($conn, "UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Edit Supplier</h2>
<form method="post">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
    <label>Telepon:</label>
    <input type="text" name="telp" value="<?= $data['telp'] ?>" required>
    <label>Alamat:</label>
    <textarea name="alamat" required><?= $data['alamat'] ?></textarea>
    <input type="submit" name="update" value="Simpan">
    <a href="index.php" class="back">Kembali</a>
</form>
</body>
</html>
