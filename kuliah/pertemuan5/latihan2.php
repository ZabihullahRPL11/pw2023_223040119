<?php 
$binatang = ['🐮','🐰','🐭','🐹','🐷'];
$makanan = ['🍕','🍔','🍟','🌭','🍿'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>daftar binatang</h2>
    <ul>
        <?php for($i = 0; $i < count($binatang); $i ++) { ?>
        <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>
    <h2>daftar makanan</h2>
    <ul>
        <?php for($i = 0; $i < 5; $i ++) { ?>
        <li><?= $makanan[$i]; ?></li>
        <?php } ?>
    </ul>

    <hr>

    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach($binatang as $b) { ?>
        <li><?= $b; ?></li>
        <?php } ?>
    </ol>
</body>
</html>