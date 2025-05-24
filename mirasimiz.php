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

    <title>Mirasımız</title>
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
    <div class="mirasimiz">
        <h2>Mirasımız</h2>
        <p>Bizim mirasımız, geçmişten gelen kültürel ve tarihi değerlerimizdir. Bu değerler, bizlere kimliğimizi, kültürümüzü ve tarihsel bağlarımızı hatırlatır. Mirasımızı korumak ve gelecek nesillere aktarmak, hepimizin sorumluluğudur.</p>
        <p>Bu bağlamda, kültürel mirasımızı yaşatmak için çeşitli etkinlikler düzenlenmekte, tarihi eserler restore edilmekte ve kültürel değerlerimiz gelecek kuşaklara aktarılmaktadır.</p>
        <p>Bu Eserlerin arasında bulunan Justinianus Köprüsü hakkında birkaç bilgi hazırladım</p>
        </div>
        <div class="Tanitim">
        <h2>Justinianus Köprüsü</h2>
        <p>Bizans İmparatoru Justinianus (527-565) tarafından MS 558-560 yıllarında yaptırılan bu taş köprü, 365 metre uzunluğunda, 9,85 metre genişliğinde olup toplam 12 kemerlidir. Köprünün batı ucunda tak izi, doğu ucunda apsisli yapı ve köprü ile ilgili tonozlu yapı kalıntıları bulunmaktadır.
Önceleri Latince “pons” (köprü) denen köprünün kendine özgü başka bir adı yoktu. Sonradan, “pons”un Latincede “köprü” demek olduğunu bilmeyen halk, bu sözcüğü bir özel ad olarak algılayıp köprüyü, “Pons Köprüsü” anlamında Pontogephyra diye anmaya başlamıştır. Daha sonraları, bu ad Pentegephyra’ya 
(Beş Köprü) dönüşmüşse de köprü şu veya bu biçimde beş parçalı olmadığı gibi, beş kemerli de değildir.
Justinianus Köprüsü 2018 yılında UNESCO Dünya Miras Geçici Listesi'ne alınmıştır.</p>
        </div>
          <div class="miras-gorsel">
    <img src="images/justinianus.jpg" alt="Justinianus Köprüsü" />
    <p class="gorsel-aciklama">Justinianus Köprüsü - Sakarya</p>
  </div>

    <?php include("footer.php"); ?>

</body>
</html>