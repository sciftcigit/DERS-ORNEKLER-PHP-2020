<?php
    // sade bir function
    function selamla() {
        echo " Merhaba <br>";
    }

    //iki tane giriş parametresi olan function
    function toplama($sayi1, $sayi2) {
        echo $sayi1 + $sayi2;
    }

    //iki tane giriş parametresi ve return değeri olan function
    function cikarma($sayi1, $sayi2) {
        return $sayi1 - $sayi2;
    }


    selamla();
    toplama(2,4);
    $sonuc = cikarma(4,6);
    echo "<br>".$sonuc;

    toplama(55,66);
    
?>