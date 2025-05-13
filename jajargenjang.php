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
    $alas=16;
    $tinggi=8;
    $sisia=10;
    $sisib=8;
    $luas=$alas*$tinggi;
    $keliling=2*($sisia + $sisib);

    ?>
    <a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>
    <h4>luas = alas * tinggi = <?php echo $luas;?></h4>
    <h4>keliling 2 * (sisia + sisib) = <?php echo $keliling;?></h4>
</body>
<img src="jajar_genjang.jpeg" widht="300" height="300" alt="">

</html>