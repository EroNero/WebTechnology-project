<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <title>İlgi Alanlarım</title>
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
    <main><div class="ilgi-alanlarim">
        <h1>İlgi Alanlarım</h1>
        <p>İlgi alanlarım arasında oyun oynamak, film ve dizi izlemek, yazılım geliştirme, web tasarımı, ve yapay zeka bulunmaktadır. Bu alanlarda sürekli olarak kendimi geliştirmeye çalışıyorum.</p>
        <p>Yazılım geliştirme konusunda C++, JavaScript ve C# gibi dillerde projeler yapmaktayım. Web tasarımında HTML, CSS ve JavaScript kullanarak arayüzler oluşturuyorum.</p>
        <p>Genellikle Üniversitede arkadaşlarımla vakit geçiriyorum. Harici olarak genelde şehir dışında kalıyorum.</p>
        <p>Genel olarak çoğu oyunda iyiyim. En iyisi değilim belki ama League of Legends turnuvalarınada katılıyorum.</p>
        <p>Film ve dizi izlemeyi çok seviyorum. Özellikle bilim kurgu ve fantastik türdeki yapımları tercih ediyorum.</p>
        </div>
        <div class="Film_ve_Diziler">
            <h2>Film ve Diziler</h2>
            <ul>
                <li>Game of Thrones<a href=""></a></li>
                <li>The Witcher<a href=""></a></li>
                <li>Harry Potter<a href=""></a></li>
            </ul>
        </div>
        <div class="Oynadigim_oyunlar">
             <ul>
                <li>League Of Legends<a href=""></a>/li>
                <li>Repo<a href=""></a></li>
                <li>Drakensang<a href=""></a></li>
            </ul>
        </div>
        <section id="film-api">
            <h2>Popüler Filmler</h2>
            <div id="film-container"></div>
        </section>
    
    <?php include("footer.php"); ?>
</body>
</html>