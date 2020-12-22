<?php 
    function ekranaYaz($dizi) {
        foreach ($dizi  as $deger) {
            print "<br>  $deger ";
        }
    }

    $arabalar = array("Volvo","Bmw","Ford","Nissan","Subaru");
    ekranaYaz($arabalar);
    
    print "<hr>";
    sort($arabalar);
    ekranaYaz($arabalar);
      
    print "<hr>";
    rsort($arabalar);
    ekranaYaz($arabalar);    

?> 