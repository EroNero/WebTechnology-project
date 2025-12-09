<?php
session_start();
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$valid_username = 'a123123123@s.e.tr';
$valid_password = 'a123123123';
if ($username === $valid_username && $password === $valid_password) {
    echo "<script>
        alert('Hoş geldiniz " . htmlspecialchars($valid_password) . "!');
        window.location.href='index.php';
    </script>";
    exit();
} else {
    echo "Kullanıcı adı veya şifre hatalı!";
} 
?>
