<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";

    // Create connection - bağlantı yaratalım
    $baglanti = new mysqli($servername, $username, $password);

    // Check connection - bağlantıyı kontrol edelim
    if ($baglanti->connect_error) {
        die("Bağlantı hatası : " . $baglanti->connect_error);
    }
    echo "Veritabanına bağlandı!";
?>