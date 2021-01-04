<?php 

function db_connect() {
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
    echo "Veritabanına bağlandı!<br>";

    return $baglanti;
}

?>