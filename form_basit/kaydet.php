<?php
    /*
    print_r($_POST);
    Array
        (
            [f_isim] => 44
            [f_soyisim] => 555
        )
    */
    
    $isim    = $_POST["f_isim"];
    $soyisim = $_POST["f_soyisim"];

    echo " Sayın $isim $soyisim hoşgeldiniz!";


?>