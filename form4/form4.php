<?php 
    // değişkenleri tanımlıyoruz ve ilk olarak değerler atıyoruz .
    $isim = $posta = $yorum = $website = "";
    $hata_isim = $hata_mail = $hata_web = "";
    $boolean_isim = $boolean_mail = $boolean_web = false;
    
    // gelen veriyi temizleme ve güvenli hale getirme işlemi
    function veri_kontrol($data) {
        $data = trim($data);               // boşluk karakteri temizliği 
        $data = stripslashes($data);       // slash temizliği - güvenlik amaçlı
        $data = htmlspecialchars($data);   // html karakterleri temizliği - güvenlik amaçlı
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        // tüm verileri ön kontrolden geçiriyoruz .
        $isim     = veri_kontrol($_POST["f_isim"]);
        $posta    = veri_kontrol($_POST["f_eposta"]);
        $website  = veri_kontrol($_POST["f_web"]);
        $yorum    = veri_kontrol($_POST["f_yorum"]);
   
        // isim kontrolü     
        if (!preg_match("/^[a-zA-Z-{ÖÇŞİĞÜöçşğüı}' ]*$/",$isim)) {
            $hata_isim = "<span style='color: red;'>  &#x2716; İsim kısmına sadece harfler girilebilir!</span>";
        } elseif (empty($isim)) { 
            $hata_isim =  "<span style='color: red;'>  &#x2716; İsim kısmına  veri girmediniz!</span>";
        } else { 
            // hata olmama durumu yani isimle ilgili sorun yok 
            $hata_isim =  " <span style='color: green;'> &#10004;</span>" ; // &#10004; -> check yani ok işareti 
            $boolean_isim = true;
        }

        // e mail kontrolü 
        if (empty($posta)) { 
            $hata_mail =  "<span style='color: red;'> &#x2716;  Mail adresi kısmına  veri girmediniz!</span>";
        }  elseif (!filter_var($posta, FILTER_VALIDATE_EMAIL)) {
            $hata_mail =  "<span style='color: red;'> &#x2716; Geçerli bir mail adresi girmediniz!</span>";
        }else { 
            $hata_mail = " <span style='color: green;'> &#10004;</span>" ;
            $boolean_mail = true;
        }

        // web adresi kontrolü
        if (empty($website)) { 
            $hata_web =  "<span style='color: red;'>&#x2716;  web adresi kısmına  veri girmediniz!</span>";
        } elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $hata_web =  "<span style='color: red;'>&#x2716;  Geçerli bir web adresi girmediniz!</span>";
        } else { 
            $hata_web = " <span style='color: green;'> &#10004;</span>" ;
            $boolean_web = true;
        }
        
    }   

    if ($boolean_isim == true AND $boolean_web == true AND $boolean_mail == true ) {
        // burada kaydetme ile ilgili işlemleri yapacağız 
        echo "Tüm veriler düzgün girilmiş! Artık kaydetme işlemine geçebilirim.";
    } else {
        // eğer yukardaki if koşulu sağlanmazsa 
        // yani veri girme işlemi tamamlanmamışsa 
        // formu aşağıda görüntülüyoruz
?> 

<html>
    <head>
        <title>Form 3 </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    
    <body>
        <div style="text-align: center;">
            <h1>Kayıt Formu</h1>   
            <form action="form4.php" method="POST">

                <br> Ad soyad: <input type="text" value="<?php echo $isim; ?>" id="f_isim" name="f_isim"> <?php echo $hata_isim; ?>
                <br> e-posta: <input type="text" value="<?php echo $posta; ?>" id="f_eposta" name="f_eposta"> <?php echo $hata_mail; ?>
                <br> Web Site:<input type="text" value="<?php echo $website; ?>" id="f_web" name="f_web"><?php echo $hata_web; ?>
                <br> Yorum: <textarea name="f_yorum"></textarea>            
                <br> <input type="submit" value="Kaydet">
            </form>
        </div>
    </body>
</html>

<?php 
    }
?> 