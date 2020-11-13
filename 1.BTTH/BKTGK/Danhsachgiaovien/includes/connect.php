<?php
    $host = 'localhost';
    $username = 'root';
    $passwd= '';
    $dbname = 'danhsachgiaovien';
    $dsn = "mysql:host=$host;dbname=$dbname";
    $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
        $db = new PDO($dsn, $username, $passwd,$option);
        $db->query('SET NAMES utf8');
    } catch (PDOException $e){
        $error_message = $e->getMessage();
        echo "<p>Error connecting to database: $error_message<p/>";
        exit();
    }
?>
