
<?php

    include("inc_tools.php");

    html_baslik("Kayıt Ekleme Ekranı");
    html_menu();
    
    // benim yazdığım veritabanına bağlanma fonksiyonu
    //  (inc_tools.php den çağırıyoruz.) 
    $baglanti =  db_connect();

    // print_r($_POST);
    // Array ( [f_isim] => Barış [f_soyisim] => Manço [f_eposta] => sciftci@gmail.com )

    $isim       = $_POST["f_isim"];
    $soyisim    = $_POST["f_soyisim"];
    $posta      = $_POST["f_eposta"];

    // sql to create table
    $sql = " INSERT INTO `kullanicilar`(`id`, `isim`, `soyisim`, `email`, `kayit_tarihi`) 
    VALUES (NULL,'$isim','$soyisim','$posta',NULL)  ";


    if ($baglanti->query($sql) === TRUE) {
        echo "kayıt eklendi ";
        echo "<a href='kayitlari_listele.php'> Kayıtları gör</a>";
    } else {
        echo "Hata  : " . $baglanti->error;
    }

    $baglanti->close();
    html_dip();
?>