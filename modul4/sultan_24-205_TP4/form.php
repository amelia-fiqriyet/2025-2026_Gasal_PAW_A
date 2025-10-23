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
