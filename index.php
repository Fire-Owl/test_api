<?php

        require_once('db-connect.php');
        $sql ='SELECT * FROM  `currency` ';       
        $query = $db->prepare($sql);
        $query ->execute();
        $result = $query->fetch();

?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>

<section>
    <div>
        <span><h1>Taux de change</h1></span>
        <span>Date et heure</span>
    </div>
    <div>
    <span class="span1">
            <span>taux actuel</span>
            <span>taux max</span>
            <span>taux mini</span>
        </span>
    </div>
    <div class='div1'>

        <span><?=$result['currencyName']?></span>
        <span class='span2'>
            <p><?=$result['currencyRate']?></p>
            <p>100</p>
            <p>100</p>
        </span>
    

  
    </div>

</section>

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


