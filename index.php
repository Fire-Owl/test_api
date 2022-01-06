<?php

$date = date("Y-m-d");

        require_once('db-connect.php');
        $viewProject = $db->query('SELECT * FROM currency  ORDER BY currencyID DESC LIMIT 1');
        while ($viewProjectRespons = $viewProject->fetch()){
        
       $taux_actuel = $viewProjectRespons['currencyRate'];
       $taux_name = $viewProjectRespons['currencyName'];
        }


            $viewProject= $db->prepare('SELECT * FROM currency WHERE currencyDate LIKE :date ORDER BY  currencyRate DESC LIMIT 1 ');
            $viewProject->execute(array(
            'date' => $date
            ));

        while ($viewProjectRespons = $viewProject->fetch()){
        
       $taux_max = $viewProjectRespons['currencyRate'];
        
    }   
    $viewProject= $db->prepare('SELECT * FROM currency WHERE currencyDate LIKE :date ORDER BY  currencyRate ASC LIMIT 1 ');
    $viewProject->execute(array(
    'date' => $date
    ));
        while ($viewProjectRespons = $viewProject->fetch()){
        
       $taux_mini = $viewProjectRespons['currencyRate'];
        
    }   
   
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
            <span><?=$taux_name?></span>
            <span class='span2'>
                <p><?=$taux_actuel?></p>
                <p><?=$taux_max?></p>
                <p><?=$taux_mini?></p>
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
