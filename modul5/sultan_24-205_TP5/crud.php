<?php
require 'conn.php';

// $query = "INSERT INTO supplier (id, nama, telp, alamat) VALUES
// (1, 'PT Maju Jaya', '021-1234567', 'Jakarta'),
// (2, 'CV Berkah Abadi', '022-2345678', 'Bandung'),
// (3, 'PT Sumber Makmur', '031-3456789', 'Surabaya'),
// (4, 'CV Sentosa', '0274-987654', 'Yogyakarta'),
// (5, 'PT Cahaya Baru', '024-5678901', 'Semarang'),
// (6, 'CV Mitra Mandiri', '0341-876543', 'Malang'),
// (7, 'PT Indah Sejahtera', '0271-765432', 'Solo'),
// (8, 'CV Mega Jaya', '0361-654321', 'Bali'),
// (9, 'PT Karya Abadi', '021-1111222', 'Depok'),
// (10, 'CV Mandiri Sentosa', '0251-333444', 'Bogor')";
// if (mysqli_query($conn, $query)) {
//     echo "Data supplier berhasil dimasukkan<br>";
// } else {
//     echo "Data supplier gagal: " . mysqli_error($conn) . "<br>";
// }
// mysqli_close($conn);

// $query = "INSERT INTO barang (kode_barang, nama_barang, harga, stok, supplier_id) VALUES
// ('BRG001', 'Pensil 2B', 2500, 100, 1),
// ('BRG002', 'Pulpen Hitam', 3000, 150, 1),
// ('BRG003', 'Buku Tulis', 8000, 200, 2),
// ('BRG004', 'Penghapus', 1500, 80, 3),
// ('BRG005', 'Penggaris 30 cm', 5000, 70, 3),
// ('BRG006', 'Spidol', 7000, 60, 4),
// ('BRG007', 'Kertas A4 80gsm', 40000, 50, 5),
// ('BRG008', 'Stabilo', 10000, 90, 6),
// ('BRG009', 'Binder', 25000, 40, 7),
// ('BRG010', 'Buku Gambar', 12000, 100, 8)
// ";
// if (mysqli_query($conn, $query)) {
//     echo "Data barang berhasil dimasukkan<br>";
// } else {
//     echo "Data barang gagal dimasukkan: " . mysqli_error($conn) . "<br>";
// }
// mysqli_close($conn);

// $query = "INSERT INTO pelanggan (nama, jenis_kelamin, telp, alamat) VALUES
// ('Andi', 'L', '081234567890', 'Jakarta'),
// ('Budi', 'L', '081298765432', 'Bandung'),
// ('Citra', 'P', '081223344556', 'Surabaya'),
// ('Dewi', 'P', '081233344455', 'Yogyakarta'),
// ('Eko', 'L', '081245678912', 'Semarang'),
// ('Fani', 'P', '081256789123', 'Malang'),
// ('Gilang', 'L', '081267891234', 'Solo'),
// ('Hana', 'P', '081278912345', 'Bali'),
// ('Indra', 'L', '081289123456', 'Depok'),
// ('Joko', 'L', '081290234567', 'Bogor')
// ";
// if (mysqli_query($conn, $query)) {
//     echo "Data pelanggan berhasil dimasukkan<br>";
// } else {
//     echo "Data pelanggan gagal dimasukkan: " . mysqli_error($conn) . "<br>";
// }
// mysqli_close($conn);

// $query = "INSERT INTO transaksi (id, waktu_transaksi, keterangan, total, pelanggan_id) VALUES
// (1, '2025-10-01', 'Pembelian alat tulis', 95000, 1),
// (2, '2025-10-02', 'Pembelian perlengkapan kantor', 120000, 2),
// (3, '2025-10-03', 'Pembelian sekolah', 75000, 3),
// (4, '2025-10-04', 'Pembelian alat gambar', 50000, 4),
// (5, '2025-10-05', 'Pembelian spidol dan kertas', 65000, 5),
// (6, '2025-10-06', 'Pembelian binder dan buku', 37000, 6),
// (7, '2025-10-07', 'Pembelian peralatan tulis', 81000, 7),
// (8, '2025-10-08', 'Pembelian kertas', 40000, 8),
// (9, '2025-10-09', 'Pembelian alat sekolah', 95000, 9),
// (10, '2025-10-10', 'Pembelian perlengkapan kantor', 112000, 10)";
// if (mysqli_query($conn, $query)) {
//     echo "Data transaksi berhasil dimasukkan<br>";
// } else {
//     echo "Data transaksi gagal: " . mysqli_error($conn) . "<br>";
// }
// mysqli_close($conn);

// $query = "INSERT INTO transaksi_detail (transaksi_id, barang_id, harga, qty) VALUES
// (1, 1, 2500, 2),
// (2, 3, 8000, 3),
// (3, 6, 7000, 1),
// (4, 9, 25000, 1),
// (5, 4, 1500, 1),
// (6, 2, 3000, 2),
// (7, 5, 5000, 3),
// (8, 7, 40000, 1),
// (9, 8, 10000, 1),
// (10, 10, 12000, 2)
// ";
// if (mysqli_query($conn, $query)) {
//     echo "Data transaksi_detail berhasil dimasukkan<br>";
// } else {
//     echo "Data transaksi_detail gagal dimasukkan: " . mysqli_error($conn) . "<br>";
// }

// $query = "INSERT INTO pembayaran (id, waktu_bayar, total, metode, transaksi_id) VALUES
// (1, '2025-10-01 10:10:00', 95000, 'Tunai', 1),
// (2, '2025-10-02 12:35:00', 120000, 'Transfer', 2),
// (3, '2025-10-03 09:50:00', 75000, 'EDC', 3),
// (4, '2025-10-04 14:15:00', 50000, 'Tunai', 4),
// (5, '2025-10-05 16:30:00', 65000, 'Transfer', 5),
// (6, '2025-10-06 08:20:00', 37000, 'EDC', 6),
// (7, '2025-10-07 14:00:00', 81000, 'Tunai', 7),
// (8, '2025-10-08 11:50:00', 40000, 'Transfer', 8),
// (9, '2025-10-09 15:05:00', 95000, 'EDC', 9),
// (10, '2025-10-10 09:35:00', 112000, 'Tunai', 10)";
// if (mysqli_query($conn, $query)) {
//     echo "Data pembayaran berhasil dimasukkan<br>";
// } else {
//     echo "Data pembayaran gagal: " . mysqli_error($conn) . "<br>";
// }
// mysqli_close($conn);

// $query = "INSERT INTO users (id_user, username, password, nama, alamat, hp, level) VALUES
// (1, 'admin1', 'admin123', 'Admin Utama', 'Jakarta', '0811111111', 0),
// (2, 'kasir1', 'kasir123', 'Kasir A', 'Bandung', '0822222222', 0),
// (3, 'manager1', 'manager123', 'Manager 1', 'Surabaya', '0833333333', 0),
// (4, 'admin2', 'admin456', 'Admin Dua', 'Yogyakarta', '0844444444', 0),
// (5, 'kasir2', 'kasir456', 'Kasir B', 'Semarang', '0855555555', 0),
// (6, 'manager2', 'manager456', 'Manager 2', 'Malang', '0866666666', 0),
// (7, 'admin3', 'admin789', 'Admin Tiga', 'Solo', '0877777777', 0),
// (8, 'kasir3', 'kasir789', 'Kasir C', 'Bali', '0888888888', 0),
// (9, 'manager3', 'manager789', 'Manager 3', 'Depok', '0899999999', 0),
// (10, 'admin4', 'admin999', 'Admin Empat', 'Bogor', '0810000000', 0)";
// if (mysqli_query($conn, $query)) {
//     echo "Data users berhasil dimasukkan<br>";
// } else {
//     echo "Data users gagal: " . mysqli_error($conn) . "<br>";
// }
// mysqli_close($conn);

?>