
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Hello World</h1> 
   <button>rate</button>
<div id="rateChange"><?php echo file_get_contents('https://api.ibanfirst.com/PublicAPI/Rate/USDEUR/') ?>


</div>

<?php 

$json = file_get_contents('http://localhost/ibanFirst.php');
$obj = json_decode($json);
print_r($obj -> {'rate'});
?>


<?php 

$json = file_get_contents('http://localhost/ibanFirst.php');
$obj = json_decode($json, true);
?> 
</div>

<DIV><?php echo $date = $obj{'rate'}{'rate'};?></DIV>
<DIV><?php echo $obj{'date'}?></DIV>



<script src="main.js"></script>
</body>
</html>




   
