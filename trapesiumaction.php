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
    $alas_atas=$_POST['alas_atas'];
    $alas_bawah=$_POST['alas_bawah'];
    $tinggi=$_POST['tinggi'];
    $sisi_1=$_POST['sisi_1'];
    $sisi_2=$_POST['sisi_2'];

    $luas=0.5* ($alas_atas + $alas_bawah) * $tinggi;
    $keliling=$alas_atas * $alas_bawah *$sisi_1 *$sisi_2;
    ?>

<a href="index.php">Home</a>
   <h1>trapesium</h1> 
   <h4>Luas = 1/2 x (a+b) x t= <?php echo $luas;?></h4>
   <h4>keliling= a x b x c x d= <?php echo $keliling;?></h4>

</body>
<img src="trapesium.jpg" widht="300" height="300" alt="">
</html>