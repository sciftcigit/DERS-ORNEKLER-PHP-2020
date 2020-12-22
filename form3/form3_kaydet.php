<?php

$isim = $posta = $yorum = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $isim     = veri_kontrol($_POST["f_isim"]);
  $posta    = veri_kontrol($_POST["f_eposta"]);
  $website  = veri_kontrol($_POST["f_web"]);
  $yorum    = veri_kontrol($_POST["f_yorum"]);
}

// gelen veriyi temizleme ve güvenli hale getirme işlemi
function veri_kontrol($data) {
  $data = trim($data);               // boşluk karakteri temizliği 
  $data = stripslashes($data);       // slash temizliği - güvenlik amaçlı
  $data = htmlspecialchars($data);   // html karakterleri temizliği - güvenlik amaçlı
  return $data;
}


// isim kontrolü     

if (!preg_match("/^[a-zA-Z-{ÖÇŞİĞÜöçşğüı}' ]*$/",$isim)) {
    echo  "<p style='color: brown;'> İsim kısmına sadece harfler girilebilir!</p>";
} elseif (empty($isim)) { 
    echo  "<p style='color: brown;'> İsim kısmına  veri girmediniz!</p>";
} else { 
    echo "<br> isim  : ".$isim   ;
}


if (!filter_var($posta, FILTER_VALIDATE_EMAIL)) {
    echo  "<p style='color: brown;'> Geçerli bir mail adresi girmediniz!</p>";
} elseif (empty($posta)) { 
    echo  "<p style='color: brown;'> mail adresi kısmına  veri girmediniz!</p>";
} else { 
    echo "<br> posta  : ".$posta ;
}



if (empty($website)) { 
    echo  "<p style='color: brown;'> web adresi kısmına  veri girmediniz!</p>";
} elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
    echo  "<p style='color: brown;'> Geçerli bir web adresi girmediniz!</p>";
} else { 
    echo "<br> Web sitesi  : ".$website ;
}

echo "<br> yorum : ".$yorum ; 

?>