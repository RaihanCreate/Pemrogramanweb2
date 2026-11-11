<?php
session_start();

// Jika session login belum ada, kembalikan pengguna ke halaman login
if (!isset($_SESSION["login"])) {
    header("Location: session1.php?error=1");
    exit;
}

$nama = htmlspecialchars($_SESSION["login"], ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Setelah Login</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $nama; ?>!</h1>

    <p>Anda berhasil login dan dapat membuka halaman ini.</p>

    <a href="session3.php">Logout</a>
</body>
</html>