<?php
$password = isset($_POST['password']) ? $_POST['password'] : '';

$valid_username = 'b241210003@sakarya.edu.tr';
$valid_password = 'b241210003';
if ($username === $valid_username && $password === $valid_password) {
    session_start();
    $_SESSION['username'] = $username;
    header('Location: index.php');
    exit();
} else {
    echo "Kullanıcı adı veya şifre hatalı!";
}
?>