<?php 

    $arabalar = array(  "araba1"=>"Volvo",
                        "araba2"=>"Bmw",
                        "araba3"=>"Ford",
                        "araba4"=>"Nissan",
                        "araba5"=>"Subaru");

    //  print_r($arabalar);

    
    foreach ($arabalar as $key => $value) {
        print " <br> $key - $value ";
    }
    echo "<hr>";
    foreach ($arabalar as $key => $value) {
        print " <br>  $value ";
    }
?> 