<?php
session_start();

// Hapus semua data session
session_unset();
session_destroy();

// Redirect ke halaman utama
header("Location: logout.php");
exit();
?>