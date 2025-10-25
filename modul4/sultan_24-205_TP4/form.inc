<!-- B. NMR 4 -->
    <!-- Memindahkan skrip form (seluruh elemen <form> … </form>) ke file baru bernama form.inc. -->
<!-- <form action="form.php" method="POST">
    <label for="surname">Masukkan Nama (Surname):</label><br>
    <input type="text" name="surname" id="surname">
    <br><br>
    <input type="submit" value="Kirim">
</form> -->

<!-- B. NMR 7 -->
    <!-- Mengubah skrip dalam file form.inc agar ketika validasi menghasilkan pesan error, data yang telah diisi sebelumnya tetap ditampilkan. -->
<!-- <form action="form.php" method="POST">
    <label for="surname">Masukkan Nama (Surname):</label><br>

    <input type="text" name="surname" id="surname"
        value="<?php
            /* if (!empty($errors) && isset($_POST['surname'])) {
                echo htmlspecialchars($_POST['surname']);
            }*/
        ?>">
    
    <?php /*
    if (isset($errors['surname'])) {
        echo "<span style='color:red'> * {$errors['surname']}</span>";
    } */
    ?>

    <br><br>
    <input type="submit" value="Kirim">
</form> -->

<!-- B. NMR 9 -->
    <!-- 9.	Menambahkan validasi server-side untuk field masukan lain dan tampilan pesan error yang sesuai untuk setiap field masukan. -->
<!-- <form action="form.php" method="POST">
    <label for="surname">Nama:</label><br>
    <input type="text" name="surname" value="<?php //echo $_POST['surname'] ?? ''; ?>">
    <?php //if (isset($errors['surname'])) echo "<span style='color:red'> * {$errors['surname']}</span>"; ?>
    <br><br>

    <label for="email">Email:</label><br>
    <input type="text" name="email" value="<?php //echo $_POST['email'] ?? ''; ?>">
    <?php //if (isset($errors['email'])) echo "<span style='color:red'> * {$errors['email']}</span>"; ?>
    <br><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password">
    <?php //if (isset($errors['password'])) echo "<span style='color:red'> * {$errors['password']}</span>"; ?>
    <br><br>

    <input type="submit" value="Kirim">
</form> -->

<!-- B. NMR 9 -->

<!-- <form action="form.php" method="POST">
    <label for="surname">Nama:</label><br>
    <input type="text" name="surname" value="<?php //echo $_POST['surname'] ?? ''; ?>">
    <?php //if (isset($errors['surname'])) echo "<span style='color:red'> * {$errors['surname']}</span>"; ?>
    <br><br>

    <label for="email">Email:</label><br>
    <input type="text" name="email" value="<?php //echo $_POST['email'] ?? ''; ?>">
    <?php //if (isset($errors['email'])) echo "<span style='color:red'> * {$errors['email']}</span>"; ?>
    <br><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password">
    <?php //if (isset($errors['password'])) echo "<span style='color:red'> * {$errors['password']}</span>"; ?>
    <br><br>

    <input type="submit" value="Kirim">
</form> -->


<form action="form.php" method="POST">
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" id="nama"
        value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>">
    <?php if (isset($errors['nama'])) echo "<span style='color:red'> * {$errors['nama']}</span>"; ?>
    <br><br>

    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email"
        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <?php if (isset($errors['email'])) echo "<span style='color:red'> * {$errors['email']}</span>"; ?>
    <br><br>

    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password">
    <?php if (isset($errors['password'])) echo "<span style='color:red'> * {$errors['password']}</span>"; ?>
    <br><br>

    <input type="submit" value="Kirim">
</form>
