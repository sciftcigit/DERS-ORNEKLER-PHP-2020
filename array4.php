<?php 

    $cars = array (
                        array("Volvo",22,18),
                        array("BMW",15,13),
                        array("Saab",5,2),
                        array("Land Rover",17,15)
    );

    echo "<br>". $cars[0][0] . " isimli arabadan ". $cars[0][1] ." adet var";
    echo "<br> satılan araç sayısı : ". $cars[0][2];

    echo "<br>". $cars[3][0] . " isimli arabadan ". $cars[3][1] ." adet var";
    echo "<br> satılan araç sayısı : ". $cars[3][2];

?> 