<?php

    $metin ="merhaba dünya";

    $nerde = strpos($metin,"r");
    echo $nerde; // çıktı : 2 
    echo  "<br>";
    
    $nerde = strpos($metin,"ha");
    echo $nerde; // çıktı : 3
    echo  "<br>";
    
    $nerde = strpos($metin,"z");
    echo $nerde; // çıktı : yok 
    echo  "<br>";
    
    $nerde = strpos($metin,"ü");
    echo $nerde; // çıktı : yok 
    echo  "<br>";


?> 