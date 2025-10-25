<!-- B. NMR 1 -->
    <!-- 1.	Mengubah file form.html yang berisi skrip form menjadi file dengan ekstensi php! -->
<!-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Surname</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form action="processData.php" method="POST">
        <label for="surname">Masukkan Nama (Surname):</label><br>
        <input type="text" name="surname" id="surname" required>
        <br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html> -->

<!-- B. NMR 2 -->
    <!-- Mengubah nilai atribut dengan nama file PHP yang dibuat sebelumnya.  -->
<!-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Surname</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form action="form.php" method="POST">
        <label for="surname">Masukkan Nama (Surname):</label><br>
        <input type="text" name="surname" id="surname" required>
        <br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html> -->

<!-- B. NMR 5 -->
    <!-- Mengubah struktur form.php agar bisa melaksanakan skenario validasi error -->
<?php
/*
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'validate.inc';
    validateName($errors, $_POST, 'surname');

    if ($errors) {
        echo '<h3 style="color:red">Terjadi kesalahan pada data yang Anda masukkan:</h3>';
        include 'form.inc';
    } else {
        echo '<h3 style="color:green">Form berhasil dikirim tanpa kesalahan!</h3>';
        // Kosongkan $_POST agar form kembali kosong
        $_POST = [];
        include 'form.inc';
    }
} else {
    include 'form.inc';
} */
?>

<!-- B. NMR 9 -->
    <!-- 9.	Menambahkan validasi server-side untuk field masukan lain dan tampilan pesan error yang sesuai untuk setiap field masukan. -->
<?php
/*
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'validate.inc';

    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');

    if ($errors) {
        echo '<h3 style="color:red">Terjadi kesalahan pada data yang Anda masukkan:</h3>';
        include 'form.inc';
    } else {
        echo '<h3 style="color:green">Form berhasil dikirim tanpa kesalahan!</h3>';
        echo '<p>Nama: ' . htmlspecialchars($_POST['surname']) . '</p>';
        echo '<p>Email: ' . htmlspecialchars($_POST['email']) . '</p>';
    }
} else {
    include 'form.inc';
} */
?>

<!-- C. 1 -->
<!-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>

    <form action="form.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php /*
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Data yang Anda masukkan:</h3>";
        echo "Nama: " . htmlspecialchars($_POST['nama']) . "<br>";
        echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Password: " . htmlspecialchars($_POST['password']) . "<br>";
    } */
    ?>
</body>
</html> -->


<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'validate.inc';

    validateName($errors, $_POST, 'nama');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');

    if ($errors) {
        echo '<h3 style="color:red">Terjadi kesalahan pada data yang Anda masukkan:</h3>';
        include 'form.inc';
    } else {
        echo '<h3 style="color:green">Data berhasil dikirim tanpa kesalahan!</h3>';
        echo '<p><b>Nama:</b> ' . htmlspecialchars($_POST['nama']) . '</p>';
        echo '<p><b>Email:</b> ' . htmlspecialchars($_POST['email']) . '</p>';
        $_POST = [];
        include 'form.inc';
    }
} else {
    include 'form.inc';
}
?>
