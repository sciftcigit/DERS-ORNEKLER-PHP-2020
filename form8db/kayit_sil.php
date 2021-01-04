
<?php

    include("inc_tools.php");

    // benim yazdığım veritabanına bağlanma fonksiyonu
    //  (inc_tools.php den çağırıyoruz.) 
    $baglanti =  db_connect();

    $silinecek_id = $_GET["f_id"];
    echo " silinecek_id  -> $silinecek_id";

    // sql to delete table
    $sql = " DELETE FROM `kullanicilar` WHERE id=$silinecek_id ";

    if ($baglanti->query($sql) === TRUE) {
        echo "kayıt silindi";
        echo "<a href='kayitlari_listele.php'> Kayıtları gör</a>";
    } else {
        echo "Hata  : " . $baglanti->error;
    }

    $baglanti->close();




?>