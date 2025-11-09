<?php
include "koneksi.php";
?>

<h2>Form Input Transaksi</h2>

<form action="simpan_transaksi.php" method="post">
    <fieldset style="width: 60%; margin-bottom: 20px;">
        <legend><b>Data Transaksi (Master)</b></legend>

        <label>Tanggal Transaksi:</label><br>
        <input type="datetime-local" name="waktu_transaksi" required><br><br>

        <label>Pelanggan:</label><br>
        <select name="pelanggan_id" required>
            <option value="">-- Pilih Pelanggan --</option>
            <?php
            $pel = mysqli_query($koneksi, "SELECT * FROM pelanggan");
            while ($p = mysqli_fetch_assoc($pel)) {
                echo "<option value='{$p['id']}'>{$p['nama']}</option>";
            }
            ?>
        </select><br><br>

        <label>Keterangan:</label><br>
        <input type="text" name="keterangan" size="50" placeholder="Misal: pembelian alat tulis"><br>
    </fieldset>

    <fieldset style="width: 60%; margin-bottom: 20px;">
        <legend><b>Detail Barang</b></legend>
        <table border="1" cellpadding="6" cellspacing="0" width="100%">
            <tr>
                <th>Pilih</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
            <?php
            $barang = mysqli_query($koneksi, "SELECT * FROM barang");
            while ($b = mysqli_fetch_assoc($barang)) {
                echo "
                <tr>
                    <td align='center'>
                        <input type='checkbox' name='barang_id[]' value='{$b['id']}'>
                    </td>
                    <td>{$b['nama_barang']}</td>
                    <td>Rp " . number_format($b['harga'], 0, ',', '.') . "</td>
                    <td><input type='number' name='jumlah_{$b['id']}' min='1' value='1' style='width: 60px;'></td>
                </tr>";
            }
            ?>
        </table>
    </fieldset>

    <input type="submit" value="Simpan Transaksi">
</form>
