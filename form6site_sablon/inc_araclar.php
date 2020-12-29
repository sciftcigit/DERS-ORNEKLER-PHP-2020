<?php 
  // inc_araclar.php

function html_baslik( $title ) {

    $metin =  "<html>
                    <head>
                        <title> $title </title>
                        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
                        <meta charset=\"UTF-8\">
                        <meta name=\"description\" content=\"PHP ders örneklerimiz\">
                        <meta name=\"keywords\" content=\"HTML, CSS, JavaScript, PHP\">
                        <meta name=\"author\" content=\"Serdar ÇİFTCİ\"> 
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">
                        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
                        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
                    </head>
                <body>";
    echo $metin;
}

function html_dip() {
    $metin = "  </div> </body> </html>";
    echo $metin;

}

function html_menu() {

    echo "<nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"ana_sayfa.php\">Ana Sayfa</a></li>
                <li class=\"active\"><a href=\"ikinci_sayfa.php\">İkinci Sayfa</a></li>
                <li class=\"active\"><a href=\"ucuncu_sayfa.php\">Üçüncü Sayfa</a></li>
                <li class=\"active\"><a href=\"dorduncu_sayfa.php\">Dördüncü Sayfa</a></li>
            </ul>
            </div>
        </nav>
            
        <div class=\"container\">
            
       ";


}

// gelen veriyi temizleme ve güvenli hale getirme işlemi
function veri_kontrol($data) {
    $data = trim($data);               // boşluk karakteri temizliği 
    $data = stripslashes($data);       // slash temizliği - güvenlik amaçlı
    $data = htmlspecialchars($data);   // html karakterleri temizliği - güvenlik amaçlı
    return $data;
}

?>