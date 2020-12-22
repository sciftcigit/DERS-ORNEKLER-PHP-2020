<?php

    $str = "Merhaba";
    echo $str;

    $str = 'Merhaba';
    echo $str;

    /// sayı olan bir veriyi tırnak içine alırsanız string kabul edilir 
    $str = "12456"; 
    echo $str;

    // hatta tırnak içinde yazdığınız herşey string kabul edilir
    $str = "ç.,ü02_!'^+%&/(";
    echo $str;

?> 