
<?php

include("inc_tools.php");

html_baslik("Kayıtları Listeleme Ekranı");
html_menu();

// benim yazdığım veritabanına bağlanma fonksiyonu
//  (inc_tools.php den çağırıyoruz.) 
$baglanti =  db_connect();

// sql to create table
$sql = " SELECT `id`, `isim`, `soyisim`, `email` FROM  kullanicilar  ";


$kayitlar = $baglanti->query($sql);

echo "Toplam kayıt sayısı : " . $kayitlar->num_rows."<br>";
echo "<br> <a href='form_kayit_ekle.php'> Yeni Kayıt Ekle</a>  ";
if ($kayitlar->num_rows > 0) {
    // output data of each row
    while( $satir = $kayitlar->fetch_assoc() ) {

        echo "<br> <b>id:</b>           " . $satir["id"]. 
             "<br> <b>İsim:</b>         " . $satir["isim"]. " " . $satir["soyisim"].  
             "<br> <b>e -posta :</b>    " . $satir["email"]. 
             "<br>| <a href='kayit_sil.php?f_id=".$satir["id"]."'> Sil </a> ".
             "  | <a href='form_kayit_duzenle.php?f_id=".$satir["id"]."''> Düzenle </a> | ".
             "<hr>";

    }
} else {
    echo "0 results";
}
$baglanti->close();

html_dip();
?>