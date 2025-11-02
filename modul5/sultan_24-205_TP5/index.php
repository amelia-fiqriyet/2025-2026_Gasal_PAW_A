<?php
$conn = mysqli_connect("localhost", "root", "", "penjualan");
if (!$conn) die("Koneksi gagal: " . mysqli_connect_error());
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Daftar Supplier</h2>
<div align="center"><a href="tambah.php">+ Tambah Supplier</a></div>
<table>
<tr><th>ID</th><th>Nama</th><th>Telepon</th><th>Alamat</th><th>Aksi</th></tr>
<?php
$q = mysqli_query($conn, "SELECT * FROM supplier");
while ($r = mysqli_fetch_assoc($q)) {
    echo "<tr>
        <td>{$r['id']}</td>
        <td>{$r['nama']}</td>
        <td>{$r['telp']}</td>
        <td>{$r['alamat']}</td>
        <td>
            <a href='edit.php?id={$r['id']}' class='edit'>Edit</a>
            <a href='hapus.php?id={$r['id']}' class='hapus' onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
        </td>
    </tr>";
}
?>
</table>
</body>
</html>
