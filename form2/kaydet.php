<?php
    /*
        print_r($_POST);
        
        [f_ad] => Barış
        [f_soyad] => Manço
        [f_cins] => e
        [f_ogrenim] => 2
        [f_dyeri] => 01
        [f_spor] => spor
        [f_muzik] => muzik
        [f_resim] => resim
        [f_adres] => moda istanbul  */

    
    
        if ( trim($_POST["f_ad"]) == "" ) { 
            echo "<br> Hata : Ad girmediniz!";
        }    
        
        if ( trim($_POST["f_soyad"]) == "" ) { 
            echo "<br> Hata : Soyad girmediniz!";
        }
        if ( !isset($_POST["f_cins"]) ) { 
            echo "<br> Hata : Cinsiyet girmediniz!";
        }
        if ( $_POST["f_ogrenim"] == "-1" ) { 
            echo "<br> Hata : Öğrenim türü seçmediniz!";
        }        
        if ( $_POST["f_dyeri"] == "-1" ) { 
            echo "<br> Hata : Doğum yeri seçmediniz!";
        }        
        if ( trim($_POST["f_adres"]) == "" ) { 
            echo "<br> Hata : Adres girmediniz!";
        }
    echo "<hr>Girilen bilgiler: ";
    foreach ($_POST as $key => $value) {
        echo "<br> $key : $value ";
    }


?>