<?php

    $metin ="öçşığü";

    $uzunluk = strlen($metin);
    echo $uzunluk;
    echo "<br>";

    $uzunluk = mb_strlen($metin, 'UTF-8');
    echo $uzunluk;
    echo "<br>";
?> 