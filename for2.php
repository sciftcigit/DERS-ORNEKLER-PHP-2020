<?php 
    /* 
    soru: 
    100 e kadar olan 3 ve 3 ün katları olan 
    sayıların toplamı nedir? 

    diğer bir ifade: 
     0 dan 100 e kadar 3 ve 3 ün katlarını 
     toplayıp sonucu ekrana yazan program
    */
    $toplam = 0;

    for ($i=0; $i < 100; $i+=3) { 
        echo "<br>" . $i;
        $toplam += $i ;         // $toplam = $toplam + $i;
    }

    echo "Toplam değeri =" . $toplam;

?> 