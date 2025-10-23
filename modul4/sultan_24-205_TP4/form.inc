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
