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
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];
    
    $luas= $panjang * $lebar;
    $keliling= 2 * ($panjang * $lebar);
    ?>

<a href="index.php">Home</a>
    <h1>persegi panjang</h1>
    <h4>Luas = panjang x lebar = <?php echo $luas;?></h4>
    <h4>keliling = 2 x panjang x lebar= <?php echo $keliling;?></h4>
</body>
<img src="Persegi_panjang.jpg" widht="300" height="300" alt="">
</html>