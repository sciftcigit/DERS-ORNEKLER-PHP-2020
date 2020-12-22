<?php 
    // print_r($_POST);
    $gecme_notu = 50;

    $vize  = $_POST["f_vize"]; 
    $final = $_POST["f_final"]; 

    echo "<br> Girilen vize değeri :". $vize;
    echo "<br> Girilen final değeri :". $final;


    $nihai_not = $vize * 0.4 + $final * 0.6;

    echo "<br> Ders geçme notu = ".$gecme_notu;
    echo "<br> Öğrencinin nihai notu = ".$nihai_not;

    if( $nihai_not >= $gecme_notu ) { 
        echo "<br> Sonuç : Başarılı.";
    } else {
        echo "<br> Sonuç : Başarısız.";
    }   

?> 