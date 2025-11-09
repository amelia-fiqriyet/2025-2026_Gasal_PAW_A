<?php
include "koneksi.php";

$waktu = $_POST['waktu_transaksi'];
$pelanggan = $_POST['pelanggan_id'];
$keterangan = $_POST['keterangan'];

// Masukkan data transaksi master
mysqli_query($koneksi, "INSERT INTO transaksi (waktu_transaksi, keterangan, total, pelanggan_id)
                        VALUES ('$waktu', '$keterangan', 0, '$pelanggan')");
$transaksi_id = mysqli_insert_id($koneksi);

$total = 0;

// Masukkan data detail transaksi
if (isset($_POST['barang_id'])) {
    foreach ($_POST['barang_id'] as $id_barang) {
        $qbarang = mysqli_query($koneksi, "SELECT harga FROM barang WHERE id='$id_barang'");
        $b = mysqli_fetch_assoc($qbarang);
        $harga = $b['harga'];

        $jumlah = $_POST['jumlah_' . $id_barang];
        $subtotal = $harga * $jumlah;
        $total += $subtotal;

        mysqli_query($koneksi, "INSERT INTO transaksi_detail (transaksi_id, barang_id, jumlah, subtotal)
                                VALUES ('$transaksi_id', '$id_barang', '$jumlah', '$subtotal')");
    }

    mysqli_query($koneksi, "UPDATE transaksi SET total='$total' WHERE id='$transaksi_id'");
}

header("Location: nota.php?id=$transaksi_id");
exit;
?>
