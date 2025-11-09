<?php
include "koneksi.php";
$id = $_GET['id'];

$q = mysqli_query($koneksi, "SELECT t.*, p.nama AS nama_pelanggan 
                             FROM transaksi t 
                             JOIN pelanggan p ON t.pelanggan_id = p.id 
                             WHERE t.id='$id'");
$data = mysqli_fetch_assoc($q);

$detail = mysqli_query($koneksi, "SELECT b.nama_barang, b.harga, d.jumlah, d.subtotal 
                                  FROM transaksi_detail d 
                                  JOIN barang b ON d.barang_id = b.id 
                                  WHERE d.transaksi_id='$id'");
?>

<h2>Nota Transaksi</h2>
Tanggal: <?= $data['waktu_transaksi']; ?><br>
Pelanggan: <?= $data['nama_pelanggan']; ?><br>
Keterangan: <?= $data['keterangan']; ?><br><br>

<table border="1" cellpadding="5" cellspacing="0">
<tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th>Subtotal</th>
</tr>

<?php
$no = 1;
while ($d = mysqli_fetch_assoc($detail)) {
    echo "<tr>
            <td>{$no}</td>
            <td>{$d['nama_barang']}</td>
            <td>Rp {$d['harga']}</td>
            <td>{$d['jumlah']}</td>
            <td>Rp {$d['subtotal']}</td>
          </tr>";
    $no++;
}
?>
</table>

<h3>Total: Rp <?= $data['total']; ?></h3>
<a href="form_transaksi.php">← Kembali ke Form Transaksi</a>
