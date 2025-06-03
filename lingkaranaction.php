<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lingkaran</title>
</head>
<body>
<?php
    $jari=$_POST['jari'];
    
    $luas= 3.14 * $jari * $jari;
    $keliling=2 * 3.14 * $jari;
    ?>

<a href="index.php">Home</a>
    <h1>lingkaran</h1>
    <h4>Luas = 3.14 x jari x jari = <?php echo $luas;?></h4>
    <h4>Keliling = 2 x phi x r = <?php echo $keliling;?></h4>
<img src="Lingkaran.JPG" widht="300" height="300" alt="">
</html>