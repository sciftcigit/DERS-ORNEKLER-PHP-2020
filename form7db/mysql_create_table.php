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
    $sql = "CREATE TABLE Kullanicilar (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                isim VARCHAR(30) NOT NULL,
                soyisim VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                kayit_tarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
    
    if ($baglanti->query($sql) === TRUE) {
      echo "Table yaratıldı.";
    } else {
      echo "Hata  : " . $baglanti->error;
    }
    
    $baglanti->close();
?>