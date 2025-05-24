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
    <title>Hakkımda</title>
</head>
<body>
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
     <div class="about-container">
    <h1>Merhaba, Ben Eren </h1>
    <p>Teknoloji tutkunu, spor seven ve oyuncu biriyim. Oyun Oynamayı film dizi izlemeyi çok severim.</p>

    <h2>Hobilerim</h2>
    <ul>
      <li>Oyun oynamak</li>
      <li>Judo</li>
      <li>Film izlemek</li>
      <li>Dizi izlemek</li>
    </ul>
    <h2>Sevdiğim Sporlar ve Etkinlikler</h2>
    <p>Oyun oynamak ve futbol izlemekten, Film ve Dizi izlemekten ve çeşitli spor etkinliklerinden hoşlanırım.</p>

    <div class="gallery">
      <img src="images/futbol.jpg" alt="Futbol" title="Futbol" />
      <img src="images/Judo.jpg" alt="Judo" title="Judo" />
      <img src="images/film.jpg" alt="Film" title="Film" />
      <img src="images/GOT.jpg" alt="Dizi" title="Dizi" />
    </div>

    <h2>Sosyal Medya</h2>
    <div class="social-links">
      <a href="https://github.com/Eronero" target="_blank" title="GitHub">Github🐱</a>
    </div>
  </div>
    <?php include("footer.php"); ?>
</body>
</html>