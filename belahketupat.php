<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
    $diagonal1=14;
    $diagonal2=18;
    $sisi=6;
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=4*$sisi;

    ?>
    <a href="index.php">Home</a>
    <h1>Belah Ketupat</h1>
    <h4>luas = 1/2 * diagonal1 * diagonal2 = <?php echo $luas;?></h4>
    <h4>keliling 4 * sisi = <?php echo $keliling;?></h4>
</body>
<img src="belahketupat.jpeg" widht="300" height="300" alt="">

</html>