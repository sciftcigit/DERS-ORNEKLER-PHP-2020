<?php 

    $arabalar = array("Volvo","Bmw","Ford","Nissan","Subaru");
    
    echo "<br>1. araba ".$arabalar[0];
    echo "<br>2. araba ".$arabalar[1];
    echo "<hr>";

    $buyukluk = count($arabalar);
    echo "dizide $buyukluk adet araba var";
    for ($i=0; $i < $buyukluk; $i++) { 
        $sira = $i+1;
        echo "<br> $sira. araba ".$arabalar[$i];
    }

?> 