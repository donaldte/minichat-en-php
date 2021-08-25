<?php
     try {
        $dbs = new PDO('mysql:host=localhost; dbname=chat', 'root', 'CHERCHEUR ',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    } catch (PDOException $e) {
        die('Error:' .$e->getmessage());
    }
?>