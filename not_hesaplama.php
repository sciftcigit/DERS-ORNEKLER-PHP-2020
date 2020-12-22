<?php 

    // vize final girilince geçme notu hesaplayan program
    
    $vize  = 44;
    $final = "gg";
    $gecme_notu = 60;

    if($vize<0 or $vize>100) {
        echo "Uyarı: Vize notu hatalı girilmiş!";
        exit();
    }

    if($final<0 or $final>100) {
        echo "Uyarı: Final notu hatalı girilmiş!";
        exit();
    }

    $nihai_not = $vize * 0.4 + $final * 0.6;

    echo "Nihai not = ".$nihai_not;

    if( $nihai_not >= $gecme_notu ) { 
        echo "<br> Başarılı.";
    } else {
        echo "<br> Başarısız.";
    }

?> 