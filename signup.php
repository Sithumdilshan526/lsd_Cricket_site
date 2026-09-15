<?php
require 'config.php';

if (is_logged_in()) {
    header('Location: index.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $pass = $_POST['password'] ?? '';
    $confirm = $_POST['confirm'] ?? '';

    if ($name === '' ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        strlen($pass) < 6 ||
        $pass !== $confirm) {
        $error = 'Please check your details.';
    } else {
        $stmt = $conn->prepare('SELECT user_id FROM users WHERE email=?');
        $stmt->bind_param('s', $email);
        $stmt->execute();

        if ($stmt->get_result()->fetch_assoc()) {
            $error = 'An account with this email already exists.';
        } else {
            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $stmt = $conn->prepare(
                'INSERT INTO users(name,email,password_hash,phone)
                 VALUES(?,?,?,?)'
            );
            $stmt->bind_param('ssss', $name, $email, $hash, $phone);
            $stmt->execute();

            $_SESSION['user'] = [
                'user_id' => $stmt->insert_id,
                'name' => $name,
                'email' => $email
            ];

            header('Location: index.php');
            exit;
        }
    }
}
?>
