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
    <title>Cv</title>
</head>
<>
    <header>
        <div class="navbar">
            <div class="logo">
                <h2><a href="index.php">Eren </a></h2>
                </div>              
                <ul class="navbarlink">
                   <li><a href="iletisim.php">İletişim</a></li>  
   <li><a href="mirasimiz.php">Mirasimiz</a></li>
   <li><a href="ilgialanlarim.php">İlgi Alanlarım</a></li>
   <li><a href="sehrim.php">Şehrim</a></li>
   <li><a href="cv.php">CV</a></li>
   <li><a href="loginpage.php">Giriş</a></li>
                </ul>
    </div>
    </header>

        <main>
        <section class="cv-container">
            <h1>CV</h1>

            <article>
                <h2 id="personal-info">Kişisel Bilgiler</h2>
                <p><strong>Ad Soyad:</strong> Eren </p>
            </article>

            <article>
                <h2 id="education">Eğitim Bilgileri</h2>
                <ul>
                    <li><strong>Lise:</strong> Sakarya Fen Lisesi Mezunu</li>
                    <li><strong>Üniversite:</strong> Sakarya Üniversitesi Bilgisayar Mühendisliği 1. Sınıf Öğrencisi</li>
                </ul>
            </article>
        </section>
        <aside class="cv-side-info">
            <h3>Ek Bilgiler</h3>
            <span>Html Samantic tagları kullanılarak hazırlanmıştır.</span>
        </aside>
        <?php include("footer.php"); ?>
    </main>
</body>
</html>