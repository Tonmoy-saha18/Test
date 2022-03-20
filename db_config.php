<?php
    ob_start();
    try {
        $con = new PDO('mysql:host=localhost:3306;dbname=hospital_management;','root','');
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo 'Error';
    }
?>