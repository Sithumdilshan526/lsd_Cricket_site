<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'lsd_cricket');

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

$conn->set_charset('utf8mb4');

function is_logged_in() {
    return !empty($_SESSION['user']);
}

function current_user() {
    return $_SESSION['user'] ?? null;
}

function require_login($next = 'checkout.php') {
    if (!is_logged_in()) {
        header('Location: signin.php?next=' . urlencode($next));
        exit;
    }
}
?>
