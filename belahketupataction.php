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
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $sisi=$_POST['sisi'];

    $luas=0.5* $d1*$d2;
    $keliling= 4* $sisi;
    ?>

    <a href="index.php">Home</a>
     <h1>belah ketupat</h1>
    <h4>Luas = 0.5 x d1 x d2 = <?php echo $luas;?></h4>
    <h4>Keliling = 4 x sisi = <?php echo $keliling;?></h4>
    <img src="belahketupat.png" widht="300" height="300" alt="">
    
</body>
</html>