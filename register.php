<?php
require 'db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        $error = "Semua kolom wajib diisi";
    } else {
        echo "Berhasil daftar";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
</head>
<body>
    <p class="error"><?= $error ?></p>
</body>
</html>
