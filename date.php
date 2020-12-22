<?php

    // Prints the day, date, month, year, time, AM or PM
    echo date("d/m/Y H:i:s");

    // the message
    $mesaj = "ilk mail mesajım!";
    $konu = "Mail konusu";
    $adres = "sciftci@gmail.com";
    // send email
    mail($adres, $konu, $mesaj);

?>