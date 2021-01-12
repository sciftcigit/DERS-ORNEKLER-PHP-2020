<?php
    include("inc_tools.php");
    html_baslik("Kayıt Ekleme Ekranı");
    html_menu();
    
    // içerik kısmı - başlangıç
?>
    <div style="text-align: center;">
        <h1>Kayıt Formu</h1>   
        <form action="yap_kayit_ekle.php" method="POST">

            <br> Ad : <input type="text" value="" id="f_isim" name="f_isim"> 
            <br> Soyad: <input type="text" value="" id="f_soyisim" name="f_soyisim"> 
            <br> e-posta: <input type="text" value="" id="f_eposta" name="f_eposta">
                
            <br> <input type="submit" value="Kaydet" class="btn btn-primary btn-sm active" >
        </form>
    </div>

<?php 
    // içerik kısmı - bitiş
    html_dip();
?>