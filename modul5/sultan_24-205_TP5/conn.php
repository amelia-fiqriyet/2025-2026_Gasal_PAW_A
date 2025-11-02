<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'penjualan';
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if ($conn){
    echo 'koneksi berhasil';
}else{
    echo 'koneksi gagal';
}

// $query = "CREATE TABLE supplier (
//     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     nama VARCHAR(100) NOT NULL,
//     telp VARCHAR(12),
//     alamat TEXT
// ) ENGINE=InnoDB";
// if(mysqli_query($conn, $query)){
//     echo 'tabel berhasil dibuat';
// }else{
//     echo 'tabel tidak berhasil dibuat' . mysqli_error($conn);
// }
// mysqli_close($conn);

// $query = "CREATE TABLE barang (
//     id INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     kode_barang VARCHAR(10) NOT NULL,
//     nama_barang VARCHAR(100) NOT NULL,
//     harga INT(11),
//     stok INT(11),
//     supplier_id INT(11),
//     CONSTRAINT fk_barang_supplier FOREIGN KEY (supplier_id) REFERENCES supplier(id)
//         ON UPDATE CASCADE ON DELETE SET NULL
// ) ENGINE=InnoDB";
// if(mysqli_query($conn, $query)){
//     echo 'tabel berhasil dibuat';
// }else{
//     echo 'tabel tidak berhasil dibuat' . mysqli_error($conn);
// }
// mysqli_close($conn);

// $query = "CREATE TABLE pelanggan (
//     id INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     nama VARCHAR(100) NOT NULL,
//     jenis_kelamin ENUM('L','P') NOT NULL,
//     telp VARCHAR(12),
//     alamat TEXT
// ) ENGINE=InnoDB";
// if(mysqli_query($conn, $query)){
//     echo 'tabel berhasil dibuat';
// }else{
//     echo 'tabel tidak berhasil dibuat' . mysqli_error($conn);
// }
// mysqli_close($conn);

// $query = "CREATE TABLE transaksi (
//     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     waktu_transaksi DATE,
//     keterangan TEXT,
//     total INT(11),
//     pelanggan_id INT(11),
//     CONSTRAINT fk_transaksi_pelanggan FOREIGN KEY (pelanggan_id) REFERENCES pelanggan(id)
//         ON UPDATE CASCADE ON DELETE SET NULL
// ) ENGINE=InnoDB";
// if(mysqli_query($conn, $query)){
//     echo 'tabel berhasil dibuat';
// }else{
//     echo 'tabel tidak berhasil dibuat' . mysqli_error($conn);
// }
// mysqli_close($conn);

// $query = "CREATE TABLE transaksi_detail (
//     transaksi_id INT(11) NOT NULL,
//     barang_id INT(11) NOT NULL,
//     harga INT(11),
//     qty INT(11),
//     PRIMARY KEY (transaksi_id, barang_id),
//     CONSTRAINT fk_detail_transaksi FOREIGN KEY (transaksi_id) REFERENCES transaksi(id)
//         ON UPDATE CASCADE ON DELETE CASCADE,
//     CONSTRAINT fk_detail_barang FOREIGN KEY (barang_id) REFERENCES barang(id)
//         ON UPDATE CASCADE ON DELETE CASCADE
// ) ENGINE=InnoDB";
// if(mysqli_query($conn, $query)){
//     echo 'tabel berhasil dibuat';
// }else{
//     echo 'tabel tidak berhasil dibuat' . mysqli_error($conn);
// }
// mysqli_close($conn);

// $query = "CREATE TABLE pembayaran (
//     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     waktu_bayar DATETIME,
//     total INT(11),
//     metode ENUM('Tunai','Transfer','EDC'),
//     transaksi_id INT(11),
//     CONSTRAINT fk_pembayaran_transaksi FOREIGN KEY (transaksi_id) REFERENCES transaksi(id)
//         ON UPDATE CASCADE ON DELETE CASCADE
// ) ENGINE=InnoDB";
// if(mysqli_query($conn, $query)){
//     echo 'tabel berhasil dibuat';
// }else{
//     echo 'tabel tidak berhasil dibuat' . mysqli_error($conn);
// }
// mysqli_close($conn);

// $query = "CREATE TABLE users (
//     id_user TINYINT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL,
//     password VARCHAR(35) NOT NULL,
//     nama VARCHAR(30),
//     alamat VARCHAR(150),
//     hp VARCHAR(20),
//     level TINYINT(1)
// ) ENGINE=InnoDB";
// if(mysqli_query($conn, $query)){
//     echo 'tabel berhasil dibuat';
// }else{
//     echo 'tabel tidak berhasil dibuat' . mysqli_error($conn);
// }
// mysqli_close($conn);
?>
