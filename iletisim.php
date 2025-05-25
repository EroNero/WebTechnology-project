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
    <title>İletişim</title>
</head>
<body>
        <header>
        <div class="navbar">
            <div class="logo">
                <h2><a href="index.php">Eren  </a></h2>
                </div>              
                <ul class="navbarlink">
                   <li><a href="iletisim.php">İletişim</a></li>  
   <li><a href="mirasimiz.php">Mirasimiz</a></li>
   <li><a href="ilgialanlarim.php">İlgi Alanlarım</a></li>
   <li><a href="sehrim.php">Şehrim</a></li>
   <li><a href="cv.php">CV</a></li>
   <li><a href="loginpage.php">Giriş</a></li>
    </div>
    <div class="form-container">
    </header>
    <br><br><br>
    <form action="formveriler.php" method="POST">
    <label for="ad-soyad">Ad Soyad</label>
    <input type="text" id="ad-soyad" name="ad-soyad" placeholder="Adınızı ve Soyadınızı girin" ><br><br>
    <label for="eposta">E-posta</label>
    <input type="email" id="eposta" name="eposta" placeholder="E-posta adresinizi girin" ><br><br>
    <label for="telefon">Telefon</label>
    <input type="tel" id="telefon" name="telefon" placeholder="Telefon numaranızı girin" ><br><br>
    <label for="yas">Yaş</label>
    <input type="number" id="yas" name="yas" placeholder="Yaşınızı girin"><br><br>
    <label for="dogum-tarihi">Doğum Tarihi</label>
    <input type="date" id="dogum-tarihi" name="dogum-tarihi" ><br><br>
    <input type="time" class="form-control" id="saat" name="saat" ><br><br>
    <label for="cinsiyet">Cinsiyet</label><br>
    <label class="radio-label">
    <input type="radio" id="erkek" name="cinsiyet" value="erkek">
    <label for="erkek">Erkek</label>
    </label><br>
    <label class="radio-label">
    <input type="radio" id="kadin" name="cinsiyet" value="kadin">
    <label for="kadin">Kadın</label><br>
    </label>
    <label for="il">İl Seçin</label>
    <select id="il" name="il" >
        <option value="" disabled selected>Bir il seçin</option>
        <option value="Adana">Adana</option>
        <option value="Adıyaman">Adıyaman</option>
        <option value="Afyonkarahisar">Afyonkarahisar</option>
        <option value="Ağrı">Ağrı</option>
        <option value="Amasya">Amasya</option>
        <option value="Ankara">Ankara</option>
        <option value="Antalya">Antalya</option>
        <option value="Artvin">Artvin</option>
        <option value="Aydın">Aydın</option>
        <option value="Balıkesir">Balıkesir</option>
        <option value="Bilecik">Bilecik</option>
        <option value="Bingöl">Bingöl</option>
        <option value="Bitlis">Bitlis</option>
        <option value="Bolu">Bolu</option>
        <option value="Burdur">Burdur</option>
        <option value="Bursa">Bursa</option>
        <option value="Çanakkale">Çanakkale</option>
        <option value="Çorum">Çorum</option>
        <option value="Denizli">Denizli</option>
        <option value="Diyarbakır">Diyarbakır</option>
        <option value="Edirne">Edirne</option>
        <option value="Elazığ">Elazığ</option>
        <option value="Erzincan">Erzincan</option>
        <option value="Erzurum">Erzurum</option>
        <option value="Eskişehir">Eskişehir</option>
        <option value="Gaziantep">Gaziantep</option>
        <option value="Giresun">Giresun</option>
        <option value="Gümüşhane">Gümüşhane</option>
        <option value="Hakkâri">Hakkâri</option>
        <option value="Hatay">Hatay</option>
        <option value="Iğdır">Iğdır</option>
        <option value="Isparta">Isparta</option>
        <option value="İstanbul">İstanbul</option>
        <option value="İzmir">İzmir</option>
        <option value="Kahramanmaraş">Kahramanmaraş</option>
        <option value="Karabük">Karabük</option>
        <option value="Karaman">Karaman</option>
        <option value="Kars">Kars</option>
        <option value="Kastamonu">Kastamonu</option>
        <option value="Kayseri">Kayseri</option>
        <option value="Kırıkkale">Kırıkkale</option>
        <option value="Kırklareli">Kırklareli</option>
        <option value="Kırşehir">Kırşehir</option>
        <option value="Kocaeli">Kocaeli</option>
        <option value="Konya">Konya</option>
        <option value="Kütahya">Kütahya</option>
        <option value="Malatya">Malatya</option>
        <option value="Manisa">Manisa</option>
        <option value="Mardin">Mardin</option>
        <option value="Mersin">Mersin</option>
        <option value="Muğla">Muğla</option>
        <option value="Muş">Muş</option>
        <option value="Nevşehir">Nevşehir</option>
        <option value="Niğde">Niğde</option>
        <option value="Ordu">Ordu</option>
        <option value="Osmaniye">Osmaniye</option>
        <option value="Rize">Rize</option>
        <option value="Sakarya">Sakarya</option>
        <option value="Samsun">Samsun</option>
        <option value="Siirt">Siirt</option>
        <option value="Sinop">Sinop</option>
        <option value="Sivas">Sivas</option>
        <option value="Tekirdağ">Tekirdağ</option>
        <option value="Tokat">Tokat</option>
        <option value="Trabzon">Trabzon</option>
        <option value="Tunceli">Tunceli</option>
        <option value="Şanlıurfa">Şanlıurfa</option>
        <option value="Uşak">Uşak</option>
        <option value="Van">Van</option>
        <option value="Yalova">Yalova</option>
        <option value="Yozgat">Yozgat</option>
        <option value="Zonguldak">Zonguldak</option>
    </select><br><br>
<label for ="hobiler">Hobiler</label><br>
<div class="checkbox-wrapper">
  <input type="checkbox" id="spor" name="hobiler[]" value="Spor">
  <label for="spor">Spor</label>
</div>
<div class="checkbox-wrapper">
  <input type="checkbox" id="müzik" name="hobiler[]" value="Müzik">
  <label for="müzik">Müzik</label>
</div>
<div class="checkbox-wrapper">
  <input type="checkbox" id="resim" name="hobiler[]" value="Resim">
  <label for="resim">Resim</label>
</div>
<div class="checkbox-wrapper">
  <input type="checkbox" id="yazılım" name="hobiler[]" value="Yazılım">
  <label for="yazılım">Yazılım</label>
</div>
    <label for="mesaj">Mesaj</label><br>
    <textarea id="mesaj" name="mesaj" placeholder="Mesajınızı buraya yazın" rows="4" ></textarea><br><br>
    <input type="submit" value="Gönder"><br>
    <input type="reset" value="Temizle"><br>   
    <div id="vueApp">
    <button type="button" @click="vueKontrolEt">Vue.js ile Kontrol Et</button>
    </div>
    </div> 
</form>

<script>
document.querySelector("form").addEventListener("submit", function(e) {
    let errors = [];
    const adSoyad = document.getElementById("ad-soyad").value.trim();
    const eposta = document.getElementById("eposta").value.trim();
    const telefon = document.getElementById("telefon").value.trim();
    const yas = document.getElementById("yas").value;
    const dogumTarihi = document.getElementById("dogum-tarihi").value;
    const saat = document.getElementById("saat").value;
    const cinsiyet = document.querySelector('input[name="cinsiyet"]:checked');
    const il = document.getElementById("il").value;
    const hobiler = document.querySelectorAll('input[name="hobiler[]"]:checked');
    const mesaj = document.getElementById("mesaj").value.trim();
    document.querySelectorAll('.input-error').forEach(el => el.textContent = '');

    function showError(inputId, message) {
        const input = document.getElementById(inputId);
        if (input) {
            const errorElem = document.createElement("div");
            errorElem.className = "input-error";
            errorElem.style.color = "red";
            errorElem.style.fontSize = "0.9em";
            errorElem.textContent = message;
            input.parentNode.insertBefore(errorElem, input.nextSibling);
        }
    }

    let hasError = false;

    if (!adSoyad) {
        showError("ad-soyad", "Ad Soyad alanı boş bırakılamaz.");
        hasError = true;
    }
    if (!eposta) {
        showError("eposta", "E-posta alanı boş bırakılamaz.");
        hasError = true;
    } else {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(eposta)) {
            showError("eposta", "Geçerli bir e-posta adresi giriniz.");
            hasError = true;
        }
    }
    if (!telefon) {
        showError("telefon", "Telefon alanı boş bırakılamaz.");
        hasError = true;
    } else {
        const phonePattern = /^\d{10}$/; 
        if (!phonePattern.test(telefon)) {
            showError("telefon", "Geçerli bir telefon numarası giriniz (10 haneli).");
            hasError = true;
        }
    }
    if (!yas) {
        showError("yas", "Yaş alanı boş bırakılamaz.");
        hasError = true;
    }
    if (!dogumTarihi) {
        showError("dogum-tarihi", "Doğum tarihi seçilmelidir.");
        hasError = true;
    }
    
    if (!saat) {
        showError("saat", "Saat seçilmelidir.");
        hasError = true;
    }
    if (!cinsiyet) {
        const cinsiyetLabel = document.querySelector('label[for="cinsiyet"]');
        if (cinsiyetLabel) {
            const errorElem = document.createElement("div");
            errorElem.className = "input-error";
            errorElem.style.color = "red";
            errorElem.style.fontSize = "0.9em";
            errorElem.textContent = "Cinsiyet seçilmelidir.";
            cinsiyetLabel.parentNode.insertBefore(errorElem, cinsiyetLabel);
        }
        hasError = true;
    }
    if (!il) {
        showError("il", "Bir il seçmelisiniz.");
        hasError = true;
    }
    if (hobiler.length === 0) {
        const hobiLabel = document.querySelector('label[for="hobiler"]');
        if (hobiLabel) {
            const errorElem = document.createElement("div");
            errorElem.className = "input-error";
            errorElem.style.color = "red";
            errorElem.style.fontSize = "0.9em";
            errorElem.textContent = "En az bir hobi seçmelisiniz.";
            hobiLabel.parentNode.insertBefore(errorElem, hobiLabel);
        }
        hasError = true;
    }
    if (!mesaj) {
        showError("mesaj", "Mesaj alanı boş bırakılamaz.");
        hasError = true;
    }

    if (hasError) {
        e.preventDefault();
    }
});
</script> 
 <script>
  const { createApp } = Vue;

  createApp({
    methods: {
      vueKontrolEt() {
        const adSoyad = document.getElementById("ad-soyad").value.trim();
        const eposta = document.getElementById("eposta").value.trim();
        const telefon = document.getElementById("telefon").value.trim();
        const yas = document.getElementById("yas").value;
        const dogumTarihi = document.getElementById("dogum-tarihi").value;
        const saat = document.getElementById("saat").value;
        const cinsiyet = document.querySelector('input[name="cinsiyet"]:checked');
        const il = document.getElementById("il").value;
        const hobiler = document.querySelectorAll('input[name="hobiler[]"]:checked');
        const mesaj = document.getElementById("mesaj").value.trim();

        let mesajlar = [];

        if (!adSoyad) mesajlar.push("Ad Soyad boş.");
        if (!eposta || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(eposta)) mesajlar.push("Geçersiz e-posta.");
        if (!telefon || !/^\d{10}$/.test(telefon)) mesajlar.push("Geçersiz telefon.");
        if (!yas) mesajlar.push("Yaş gerekli.");
        if (!dogumTarihi) mesajlar.push("Doğum tarihi gerekli.");
        if (!saat) mesajlar.push("Saat gerekli.");
        if (!cinsiyet) mesajlar.push("Cinsiyet gerekli.");
        if (!il) mesajlar.push("İl gerekli.");
        if (hobiler.length === 0) mesajlar.push("En az bir hobi seçilmeli.");
        if (!mesaj) mesajlar.push("Mesaj alanı boş.");

        if (mesajlar.length > 0) {
          alert("Vue.js Kontrol Sonuçları:\n\n" + mesajlar.join("\n"));
        } else {
          alert("Vue.js: Tüm alanlar geçerli.");
        }
      }
    }
  }).mount("#vueApp");
  </script>
  <div class="footer">
 <?php include("footer.php"); ?>
 </div>
</body>

</html>
