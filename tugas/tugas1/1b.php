<?php 
    $npm = 19;
    $npm *= 5;
    $npm /= 2;
    $npm += 75;
    $npm -= 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>b</title>
</head>
<body>
    <p>
        Aku adalah angka <b><?php echo $npm ?></b><br>
        Jika aku di kali 5, maka aku sekarang menjadi <b><?php echo $npm *= 5 ?></b><br>
        Jika aku di bagi 2, maka aku sekarang menjadi <b><?php echo $npm /= 2 ?></b><br>
        Jika aku di tambah 75, maka aku sekarang menjadi <b><?php echo $npm += 75 ?></b><br>
        Jika aku di dikurang 20, maka aku sekarang menjadi <b><?php echo $npm -= 20 ?></b><br>
    </p>
   

</body>
</html>