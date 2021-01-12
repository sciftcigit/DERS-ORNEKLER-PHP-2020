<?php 
//veritabanına bağlanan foknsiyon

function db_connect() {
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $veritabani = "ders_php";

    // Create connection - bağlantı yaratalım
    $baglanti = new mysqli($servername, $username, $password, $veritabani);

    // Check connection - bağlantıyı kontrol edelim
    if ($baglanti->connect_error) {
        die("Bağlantı hatası : " . $baglanti->connect_error);
    }
    // echo "Veritabanına bağlandı!<br>";

    return $baglanti;
}

// sayfa html başlık kısmı
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
// sayfa html alt kısım
function html_dip() {
    $metin = "  </div> </body> </html>";
    echo $metin;

}

// sayfa html menü kısmı
function html_menu() {

    echo "<nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">Veritabanı Uygulaması V-1.0</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"index.php\">Ana Sayfa</a></li>
                <li class=\"active\"><a href=\"kayitlari_listele.php\">Kayıtları Listele</a></li>
                <li class=\"active\"><a href=\"form_kayit_ekle.php\">Kayıt Ekle</a></li>
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