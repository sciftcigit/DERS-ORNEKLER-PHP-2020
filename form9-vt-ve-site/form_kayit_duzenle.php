<?php

include("inc_tools.php");

html_baslik("Kayıt Düzenleme Ekranı");
html_menu();

// benim yazdığım veritabanına bağlanma fonksiyonu
//  (inc_tools.php den çağırıyoruz.) 
$baglanti =  db_connect();

$id = $_GET["f_id"];

// sql to create table
$sql = " SELECT `id`, `isim`, `soyisim`, `email` FROM  kullanicilar  WHERE id = $id ";

$kayitlar = $baglanti->query($sql);
$satir = $kayitlar->fetch_assoc();
?>

    <div style="text-align: center;">
        <h1>Kayıt Düzenleme Formu</h1>   
        <form action="yap_kayit_duzenle.php" method="POST">

            <br> Ad : <input type="text" value="<?php echo $satir["isim"]?>" id="f_isim" name="f_isim"> 
            <br> Soyad: <input type="text" value="<?php echo $satir["soyisim"]?>" id="f_soyisim" name="f_soyisim"> 
            <br> e-posta: <input type="text" value="<?php echo $satir["email"]?>" id="f_eposta" name="f_eposta">
            
                    <input type="hidden" name="f_id" value="<?php echo $id?>">
            <br> <input type="submit" value="Kaydet">
        </form>
    </div>

<?php 
    html_dip();
?>
