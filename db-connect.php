<?php
$servername ='localhost';
$dbname ='test_api';
$username ='root';
$password ='';
try {
    $db = new PDO("mysql:host=$servername; dbname=$dbname",$username, $password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo 'Error Connection : '.$e->getMessage();
}