<?php
$servername ='localhost'; // changer le nom pour votre serveur 
$dbname ='test_api'; // nom de la base de donnée NE PAS CHANGER
$username ='root'; // changer par votre identifiant. 
$password =''; // si vous avez un mot de passe inscriver le içi
try {
    $db = new PDO("mysql:host=$servername; dbname=$dbname",$username, $password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo 'Error Connection : '.$e->getMessage();
}