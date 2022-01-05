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

/* https://api.ibanfirst.com/PublicAPI/Rate/USDEUR/ */
$json = file_get_contents('http://localhost/test_api/ibanFirst.php');
$obj = json_decode($json, true);

$name = $obj{'rate'}{'instrument'};
$rate = $obj{'rate'}{'rate'};
$date = $obj{'date'};



$sql = "INSERT INTO currency (`currencyName`, `currencyRate`, `currencyDate`) VALUES(:name, :rate, :date)";
            $query = $db->prepare($sql);
            $query->bindValue(':name', $name, PDO::PARAM_STR);
            $query->bindValue(':rate', $rate, PDO::PARAM_STR);
            $query->bindValue(':date', $date, PDO::PARAM_STR);
            $query->execute();

?>

