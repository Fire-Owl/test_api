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
                    )
                );

        while ($viewProjectRespons = $viewProject->fetch()){
            $taux_max = $viewProjectRespons['currencyRate'];
        }   
        $viewProject= $db->prepare('SELECT * FROM currency WHERE currencyDate LIKE :date ORDER BY  currencyRate ASC LIMIT 1 ');
        $viewProject->execute(array(
                    'date' => $date
                    )
                );
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
        <div class='header'>
            <span><h1>Taux de change</h1></span>
            <div id="digital-clock__time">
            <span id="digital-clock__time--hours"></span>
            <span>:</span>
            <span id="digital-clock__time--minutes"></span>
            <span>:</span>
            <span id="digital-clock__time--seconds"></span>
            <span id="digital-clock__date--day"></span>
     </div>
        </div>
        <div>
            <span class="span1">
                <span> <p>taux actuel</p> </span>
                <span> <p>taux max</p>  </span>
                <span><p>taux mini</p></span>
            </span>
        </div>
        <div class='div1'>
            <span id='name'><?=$taux_name?></span>
            <span class='span2'>
                <p><?=$taux_actuel?></p>
                <p><?=$taux_max?></p>
                <p><?=$taux_mini?></p>
            </span>
        </div>
    </section>


    <?php
/* ibanFirst.php */

    $json = file_get_contents('http://localhost/test_api/https://api.ibanfirst.com/PublicAPI/Rate/USDEUR/');
    $obj = json_decode($json, true);
    ?>
<DIV><?php echo $obj{'rate'}{'instrument'};?></DIV>
<DIV><?php echo $obj{'rate'}{'rate'};?></DIV>
<DIV><?php echo $obj{'date'}?></DIV>


<script src="main.js"></script>
</body>
</html>
