<?php 

    $cars = array (
                        array("Volvo",22,18),
                        array("BMW",15,13),
                        array("Saab",5,2),
                        array("Land Rover",17,15)
    );

    for ($row = 0; $row < count($cars); $row++) {
        echo "<p><b>Kayıt no: $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
      }

?> 