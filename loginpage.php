<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <title>Giriş</title>
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
   <li><a href="loginpage.php">Giriş</a></li>
                </ul>
    </div>
    </header>
    <form action="login.php" method="post">
        <br><br><br>
        <label for="E-posta">E-Posta:</label>
        <input type="email" id="username" name="username">
        <br>
        <label for="password">Şifre:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Giriş Yap">
</body>
</html>