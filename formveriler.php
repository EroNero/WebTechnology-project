<?php
$adsoyad = isset($_POST['ad-soyad']) ? trim($_POST['ad-soyad']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
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
if (empty($hobiler)) {
    echo "Seçilen hobi yok.";
} else {
    echo "<ul>";
    foreach ($hobiler as $hobi) {
        echo "<li>" . htmlspecialchars($hobi) . "</li>";
    }
    echo "</ul>";
}

echo "</p>";
echo "<p><strong>Mesaj:</strong> " . nl2br(htmlspecialchars($mesaj)) . "</p>";
?>