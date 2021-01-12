
<?php

    include("inc_tools.php");

    html_baslik("Kayıt Düzenleme Ekranı");
    html_menu();

    // benim yazdığım veritabanına bağlanma fonksiyonu
    //  (inc_tools.php den çağırıyoruz.) 
    $baglanti =  db_connect();

    $duzenle_id = $_POST["f_id"];
    // echo " duzenle_id  -> $duzenle_id";

    // sql to update table
    $sql = "
                UPDATE `kullanicilar` 
                SET 
                    `isim`      ='".$_POST["f_isim"]."' ,
                    `soyisim`   ='".$_POST["f_soyisim"]."',
                    `email`     ='".$_POST["f_eposta"]."' 
                WHERE id=$duzenle_id
    ";
    // print($sql);

    if ($baglanti->query($sql) === TRUE) {
        echo "Kayıt düzenlendi";
        echo "<a href='kayitlari_listele.php'> Kayıtları gör</a>";
    } else {
        echo "Hata  : " . $baglanti->error;
    }

    $baglanti->close();
    html_dip();
?>