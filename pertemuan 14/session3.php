<?php
session_start();

// Menghapus data session
session_unset();
session_destroy();

// Kembali ke halaman login
header("Location: session1.php?logout=1");
exit;
?>