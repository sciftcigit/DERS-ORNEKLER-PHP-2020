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
    $sql = " SELECT `id`, `isim`, `soyisim`, `email` FROM  kullanicilar  ";
    
    
    $kayitlar = $baglanti->query($sql);

    echo "Toplam kayıt sayısı : " . $kayitlar->num_rows."<br>";

    if ($kayitlar->num_rows > 0) {
        // output data of each row
        while( $satir = $kayitlar->fetch_assoc() ) {

            print_r($satir);

            echo "id: " . $satir["id"]. " - İsim: " . $satir["isim"]. " " . $satir["soyisim"]. "<br>";
            echo " e -posta :". $satir["email"]. "<br>";

        }
    } else {
        echo "0 results";
    }
    $baglanti->close();
?>