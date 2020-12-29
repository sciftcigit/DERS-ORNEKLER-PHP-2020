<?php
    include("inc_araclar.php");
    html_baslik("Form Kaydet");
    html_menu();
    
    // içerik kısmı - başlangıç
?>
        <div style="text-align: center;">
            <h1>Kayıt Formu</h1>   
            <form action="form4.php" method="POST">
                <br> Ad soyad: <input type="text" value="" id="f_isim" name="f_isim">
                <br> e-posta: <input type="text" value="" id="f_eposta" name="f_eposta"> 
                <br> Web Site:<input type="text" value="" id="f_web" name="f_web"> 
                <br> Yorum: <textarea name="f_yorum"></textarea>            
                <br> <input type="submit" value="Kaydet">
            </form>
        </div>

<?php 
    // içerik kısmı - bitiş
    html_dip();
?>