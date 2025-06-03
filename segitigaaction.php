<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segitiga</title>
</head>
<body>
<?php
    
    $luas=0.5 * $alas * $tinggi;
    $keliling= $sisi_1 + $sisi_2 + $sisi_3;
    ?>

<a href="index.php">Home</a>
    <h1>segitiga</h1>
    <h4>Luas = 1/2 x alas x tinggi = <?php echo $luas;?></h4>
    <h4>keliling = sisi1 + sisi2 + sisi3= <?php echo $keliling;?></h4>
</body>
<img src="segitiga.jpg" widht="300" height="300" alt="">
</html>