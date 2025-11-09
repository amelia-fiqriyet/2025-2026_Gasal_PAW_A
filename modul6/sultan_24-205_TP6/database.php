<?php
/*
$koneksi = mysqli_connect("localhost", "root", "");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS tp6";
if (mysqli_query($koneksi, $sql)) {
    echo "Database berhasil dibuat atau sudah ada.<br>";
} else {
    die("Gagal membuat database: " . mysqli_error($koneksi));
}

mysqli_select_db($koneksi, "tp6");

$sql_supplier = "CREATE TABLE IF NOT EXISTS supplier (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    telp VARCHAR(20),
    alamat VARCHAR(100)
)";
mysqli_query($koneksi, $sql_supplier);

mysqli_query($koneksi, "INSERT INTO supplier (nama, telp, alamat) VALUES
('PT Maju Jaya', '021-1234567', 'Jakarta'),
('CV Berkah Abadi', '022-2345678', 'Bandung'),
('PT Sumber Makmur', '031-3456789', 'Surabaya'),
('CV Sentosa', '0274-987654', 'Yogyakarta'),
('PT Cahaya Baru', '024-5678901', 'Semarang'),
('CV Mitra Mandiri', '0341-876543', 'Malang'),
('PT Indah Sejahtera', '0271-765432', 'Solo'),
('CV Mega Jaya', '0361-654321', 'Bali'),
('PT Karya Abadi', '021-1111222', 'Depok'),
('CV Mandiri Sentosa', '0251-333444', 'Bogor')
");


$sql_barang = "CREATE TABLE IF NOT EXISTS barang (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_barang VARCHAR(50),
    harga INT,
    stok INT,
    supplier_id INT,
    FOREIGN KEY (supplier_id) REFERENCES supplier(id)
)";
mysqli_query($koneksi, $sql_barang);

mysqli_query($koneksi, "INSERT INTO barang (nama_barang, harga, stok, supplier_id) VALUES
('Pensil 2B', 2500, 100, 1),
('Pulpen Hitam', 3000, 150, 1),
('Buku Tulis', 8000, 200, 2),
('Penghapus', 1500, 80, 3),
('Penggaris 30 cm', 5000, 70, 3),
('Spidol', 7000, 60, 4),
('Kertas A4 80gsm', 40000, 50, 5),
('Stabilo', 10000, 90, 6),
('Binder', 25000, 40, 7),
('Buku Gambar', 12000, 100, 8)
");


$sql_pelanggan = "CREATE TABLE IF NOT EXISTS pelanggan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50)
)";
mysqli_query($koneksi, $sql_pelanggan);

mysqli_query($koneksi, "INSERT INTO pelanggan (nama) VALUES
('Andi'), ('Budi'), ('Citra'), ('Dewi'), ('Eka'),
('Fajar'), ('Gita'), ('Hadi'), ('Indra'), ('Joko')
");


$sql_transaksi = "CREATE TABLE IF NOT EXISTS transaksi (
    id INT PRIMARY KEY AUTO_INCREMENT,
    waktu_transaksi DATE,
    keterangan VARCHAR(100),
    total INT,
    pelanggan_id INT,
    FOREIGN KEY (pelanggan_id) REFERENCES pelanggan(id)
)";
mysqli_query($koneksi, $sql_transaksi);


$sql_detail = "CREATE TABLE IF NOT EXISTS transaksi_detail (
    id INT PRIMARY KEY AUTO_INCREMENT,
    transaksi_id INT,
    barang_id INT,
    jumlah INT,
    subtotal INT,
    FOREIGN KEY (transaksi_id) REFERENCES transaksi(id),
    FOREIGN KEY (barang_id) REFERENCES barang(id)
)";
mysqli_query($koneksi, $sql_detail);

echo "<br>Semua tabel berhasil dibuat dan data awal sudah dimasukkan"; */
?>
