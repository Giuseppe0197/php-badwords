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

$helloWorld = "Primo esercizio con l'utilizzo di php";

$wordToCensor = str_replace('esercizio', '***', $helloWorld);

?>

<style>

    body {
        background-color: blue;
        color: white;
        text-align: center;
    }
    .number, .censor {
        font-size: 40px;
        margin-bottom: 20px;
    }
</style>

<h1><?php echo $helloWorld?></h1>

<div class="number">Numero dei caratteri utilizzati: <?php echo strlen($helloWorld)?></div>

<div class="censor"><?php echo $wordToCensor?></div>

<div class="number">Numero dei caratteri utilizzati dopo la censura: <?php echo strlen($wordToCensor)?></div>
    
</body>
</html>