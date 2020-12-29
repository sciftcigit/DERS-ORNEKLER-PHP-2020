<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=ders_php", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Bağlantı sağlandı.";
    } catch(PDOException $e) {
        echo "Bağlantı hatası : " . $e->getMessage();
    }
?>