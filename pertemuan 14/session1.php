<?php
session_start();

// Jika sudah login, langsung buka halaman utama
if (isset($_SESSION["login"])) {
    header("Location: session2.php");
    exit;
}

$error = "";
$pesan = "";

// Pesan setelah logout atau saat pengguna belum login
if (isset($_GET["logout"])) {
    $pesan = "Anda berhasil logout.";
}

if (isset($_GET["error"])) {
    $pesan = "Silakan login terlebih dahulu.";
}

// Memeriksa data yang dikirim dari formulir
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = trim($_POST["user"] ?? "");
    $pass = $_POST["pass"] ?? "";

    // Username dan password untuk latihan
    if ($user === "raihan" && $pass === "123") {
        session_regenerate_id(true);
        $_SESSION["login"] = $user;

        header("Location: session2.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php if ($pesan !== ""): ?>
        <p><?php echo htmlspecialchars($pesan); ?></p>
    <?php endif; ?>

    <?php if ($error !== ""): ?>
        <p style="color: red;">
            <?php echo htmlspecialchars($error); ?>
        </p>
    <?php endif; ?>

    <form action="session1.php" method="post">
        <label>Username:</label>
        <input type="text" name="user" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="pass" required>
        <br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>