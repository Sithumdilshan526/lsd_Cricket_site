<?php
require 'config.php';

if (is_logged_in()) {
    header('Location: index.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $pass = $_POST['password'] ?? '';

    $stmt = $conn->prepare(
        'SELECT user_id,name,email,password_hash
         FROM users
         WHERE email=?'
    );
    $stmt->bind_param('s', $email);
    $stmt->execute();

    $user = $stmt->get_result()->fetch_assoc();

    if ($user && password_verify($pass, $user['password_hash'])) {
        $_SESSION['user'] = $user;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid email or password.';
    }
}
?>
