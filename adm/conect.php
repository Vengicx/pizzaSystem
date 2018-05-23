<?php
    $dbname = "pizzasystem";
    $root = "root";
    $rootPassword "";
    $localhost = "127.0.0.1";

    try {
        $pdo = new PDO("mysql:host=$localhost;dbname=$dbname;charset=utf8",$root,$rootPassword);
    } catch (PDOException $error){
        echo $error->getMessage();
        exit;
    }















?>