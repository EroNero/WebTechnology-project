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

    <title>Şehrim</title>
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
<div class="slider-container">
  <div class="slides">
    <div class="slide">
      <img src="images/karasu.jpg" alt="Gezilecek Yer 1">
    </div>
    <div class="slide">
      <img src="images/tarihisar.jpg" alt="Gezilecek Yer 2">
    </div>
    <div class="slide">
      <img src="images/justinianus.jpg" alt="Gezilecek Yer 3">
    </div>
    <div class="slide">
      <img src="images/tarakli.jpg" alt="Gezilecek Yer 4">
    </div>
  </div>
  <button class="prev">&#10094;</button>
  <button class="next">&#10095;</button>
</div>
<section class="sehir-section">
  <h2 class="sehir-baslik">Sakarya'ya Hoşgeldiniz!</h2>
  <p class="sehir-tanitim">Sakarya, doğal güzellikleri, tarihi yapıları ve eşsiz plajları ile ziyaretçilerini bekliyor. Yeşil alanları ve nehirleriyle Türkiye'nin incilerinden biridir.</p>

  <h3 class="gezilecek-baslik">Gezilecek Yerler</h3>
  <ul class="gezilecek-listesi">
    <li><strong>Karasu Plajı:</strong> Sakarya'nın en güzel plajlarından biri, temiz denizi ve geniş kumsalıyla yaz tatili için ideal.</li>
    <li><strong>Tarihi Orhan Camii:</strong> Osmanlı döneminden kalma tarihi bir camii, mimarisi ve tarihi önemi ile ziyaretçilerini büyülüyor.</li>
    <li><strong>Justinianus Köprüsü:</strong> Justinianus Köprüsü, Roma İmparatoru Justinianus döneminde inşa edilmiş tarihi bir yapıdır. Doğa ve tarih tutkunları için ideal bir ziyaret noktasıdır.</li>
    <li><strong>Taraklı</strong> Taraklı, Osmanlı döneminden kalma tarihi dokusunu koruyan şirin bir ilçedir. Tarihi hamamları ve yöresel lezzetleriyle ziyaretçilerin ilgisini çeker.</li>
  </ul>
</section>
  <?php include("footer.php"); ?>
  <script>
 const slides = document.querySelector('.slides');
const slideCount = slides.children.length;
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
let currentIndex = 0;

function showSlide(index) {
  if(index < 0) {
    currentIndex = slideCount - 1;
  } else if(index >= slideCount) {
    currentIndex = 0;
  } else {
    currentIndex = index;
  }
  slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}

prevBtn.addEventListener('click', () => {
  showSlide(currentIndex - 1);
});

nextBtn.addEventListener('click', () => {
  showSlide(currentIndex + 1);
});


showSlide(0);
</script>
</body>
</html>