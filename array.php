<?php 

    $araba1 = "Volvo";
    $araba2 = "Bmw";
    $araba3 = "Ford";

    print "<br>1. Araba " . $araba1;
    print "<br>2. Araba " . $araba2;
    print "<br>3. Araba " . $araba3;

    print "<hr>";

    $arabalar = ["Volvo","Bmw","Ford"];
    print $arabalar;

    print "<br>1. Araba " . $arabalar[0];
    print "<br>2. Araba " . $arabalar[1];
    print "<br>3. Araba " . $arabalar[2];
   
    print "<hr>";

    foreach ($arabalar as $anahtar => $deger) {
        print "<br> ".($anahtar+1).". Araba  $deger ";
    }

?> 