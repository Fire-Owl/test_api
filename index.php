
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

/* https://api.ibanfirst.com/PublicAPI/Rate/USDEUR/ */
    $json = file_get_contents('http://localhost/test_api/ibanFirst.php');
    $obj = json_decode($json, true);

    
    ?>
<DIV><?php echo $obj{'rate'}{'instrument'};?></DIV>
<DIV><?php echo $obj{'rate'}{'rate'};?></DIV>
<DIV><?php echo $obj{'date'}?></DIV>
</body>
</html>


