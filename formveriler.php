<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <title>Form Verileri</title>
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo">
            <h2><a href="index.php">Eren Kısacık</a></h2>
        </div>              
        <ul class="navbarlink">
            <li><a href="iletisim.php">İletişim</a></li>  
            <li><a href="mirasimiz.php">Mirasimiz</a></li>
            <li><a href="ilgialanlarim.php">İlgi Alanlarım</a></li>
            <li><a href="sehrim.php">Şehrim</a></li>
            <li><a href="cv.php">CV</a></li>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                echo '<li><a href="logout.php">Form Verileri</a></li>';
            }
            else {
                echo '<li><a href="loginpage.php">Giriş</a></li>';
            }
            ?>
            
        </ul>
    </div> 
</header>
<div class="formverileri">
    <?php
$adsoyad = isset($_POST['ad-soyad']) ? trim($_POST['ad-soyad']) : '';
$email = isset($_POST['eposta']) ? trim($_POST['eposta']) : '';
$telefon = isset($_POST['telefon']) ? trim($_POST['telefon']) : '';
$yas = isset($_POST['yas']) ? trim($_POST['yas']) : '';
$dogum_tarihi = isset($_POST['dogum-tarihi']) ? trim($_POST['dogum-tarihi']) : '';
$cinsiyet = isset($_POST['cinsiyet']) ? trim($_POST['cinsiyet']) : '';
$il = isset($_POST['il']) ? trim($_POST['il']) : '';
$hobiler = isset($_POST['hobiler']) ? $_POST['hobiler'] : array();
$mesaj = isset($_POST['mesaj']) ? trim($_POST['mesaj']) : '';
echo "<h2>Form Verileri</h2>";
echo "<p><strong>Ad Soyad:</strong> " . htmlspecialchars($adsoyad) . "</p>";
echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
echo "<p><strong>Telefon:</strong> " . htmlspecialchars($telefon) . "</p>";
echo "<p><strong>Yaş:</strong> " . htmlspecialchars($yas) . "</p>";
echo "<p><strong>Doğum Tarihi:</strong> " . htmlspecialchars($dogum_tarihi) . "</p>";
echo "<p><strong>Cinsiyet:</strong> " . htmlspecialchars($cinsiyet) . "</p>";
echo "<p><strong>İl:</strong> " . htmlspecialchars($il) . "</p>";
echo "<p><strong>Hobiler:</strong> ";
foreach ($hobiler as $hobi) {
    echo htmlspecialchars($hobi) . " ";
}
echo "</p>";
echo "<p><strong>Mesaj:</strong> " . nl2br(htmlspecialchars($mesaj)) . "</p>";
?>
</div>
</body>
</html>
