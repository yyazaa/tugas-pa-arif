<?php
session_start();

// Kosongkan semua data session
session_unset();

// Hancurkan session yang tersimpan di server
session_destroy();

// Arahkan kembali pengguna ke halaman form Login
header('Location: login.php');
exit;
?>