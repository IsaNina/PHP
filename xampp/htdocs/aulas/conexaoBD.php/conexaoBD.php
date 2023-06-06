<?php

    try{
        $db ='mysql:host=143.106.241.3;dbname=cl201280;charset=utf8';
        $user = 'cl201280';
        $passwd = "cl*13092005";
        $pdo = new PDO ($db, $user, $passwd);

        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $output = 'Impossível conectar BD: ' . $e . '<br>';
        echo $output;

    }
?>