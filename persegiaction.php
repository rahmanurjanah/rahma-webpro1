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
    $sisi=$_POST['sisi'];
    $luas=$sisi*$sisi;
    $keliling=4*$sisi;
    ?>
<a href="index.php">Home</a>
    <h1>persegi</h1>
    <h4>Luas = sisi x sisi = <?php echo $luas;?></h4>
    <h4>Keliling = 4 x sisi = <?php echo $keliling;?></h4>
    
</body>
<img src="persegi.jpg" widht="300" height="300" alt="">

</html>