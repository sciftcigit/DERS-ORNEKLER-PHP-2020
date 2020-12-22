<?php
    function ekranaYaz($dizi) {
        foreach ($dizi  as $deger) {
            print "<br>  $deger ";
        }
    }

    $dizi1=array(   "a"=>"kırmızı",
                    "b"=>"yeşil",
                    "c"=>"mavi",
                    "d"=>"sarı"
                );

    $dizi2=array(   "e"=>"kırmızı",
                    "f"=>"yeşil",
                    "g"=>"mavi",
                    "h"=>"mor"
                );

    $sonuc = array_diff($dizi1,$dizi2);
    ekranaYaz($sonuc);
    
    print "<hr>";
  

?> 