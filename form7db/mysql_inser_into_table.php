<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $veritabani = "ders_php";

    // Create connection - bağlantı yaratalım
    $baglanti = new mysqli($servername, $username, $password, $veritabani);

    // Check connection - bağlantıyı kontrol edelim
    if ($baglanti->connect_error) {
        die("Bağlantı hatası : " . $baglanti->connect_error);
    }
    echo "Veritabanına bağlandı!";

    // sql to create table
    $sql = " INSERT INTO `kullanicilar`(`id`, `isim`, `soyisim`, `email`, `kayit_tarihi`) 
                VALUES (NULL,'Barış','Manço','baris@manco.com',NULL)  ";
    
    
    if ($baglanti->query($sql) === TRUE) {
      echo "kayıt eklendi";
    } else {
      echo "Hata  : " . $baglanti->error;
    }
    
    $baglanti->close();
?>