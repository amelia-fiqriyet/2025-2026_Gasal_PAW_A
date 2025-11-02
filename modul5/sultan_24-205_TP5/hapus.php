<?php
$conn = mysqli_connect("localhost", "root", "", "penjualan");
if (!$conn) die("Koneksi gagal: " . mysqli_connect_error());

$id = intval($_GET['id'] ?? 0);
mysqli_query($conn, "DELETE FROM supplier WHERE id=$id");
header("Location: index.php");
?>
