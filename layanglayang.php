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
    $diagonal1=12;
    $diagonal2=15;
    $sisipendek=5;
    $sisipanjang=8;
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=2*($sisipendek + $sisipanjang);

    ?>
    <a href="index.php">Home</a>
    <h1>Layang Layang</h1>
    <h4>luas = 1/2 * diagonal1 * diagonal2 = <?php echo $luas;?></h4>
    <h4>keliling 2 * (sisipendek + sisipanjang) = <?php echo $keliling ;?></h4>

</body>
<img src="layang_layang.jpg" widht="300" height="300" alt="">
