 <?php 
$film = [
    [
    'poster' => 'vagabond.png',
    'judul'=>'vagabond',
    'tahun'=>'2019',
    'genre'=>['action,','mystery,','thriller,'],
    'pemeran_utama'=>['lee seung-gi,','bae suzy,'],
    'sutradara'=>'yu in-sik'
],
    [
    'poster' => 'after.png',
    'judul'=>'after',
    'tahun'=>'2019',
    'genre'=>['drama,','romance,'],
    'pemeran_utama'=>['hardin,','theresa,'],
    'sutradara'=>'jenny gage'
],
    [
    'poster' => 'NTD.png',
    'judul'=>'no time to die',
    'tahun'=>'2021',
    'genre'=>['action,','adventure,','thriller,'],
    'pemeran_utama'=>['daniel craig,','ana de armas,'],
    'sutradara'=>'cary joji fukunaga'
],
    [
    'poster' => 'TTB.png',
    'judul'=>'train to busan',
    'tahun'=>'2016',
    'genre'=>['action,','horror,','thriller,'],
    'pemeran_utama'=>['gong yoo,','jung yu-mi,','ma deong-seok,'],
    'sutradara'=>'sang-ho yeon'
],
    [
    'poster' => 'insidious.png',
    'judul'=>'insidious fear the dark',
    'tahun'=>'2023',
    'genre'=>['drama,','horror,','mystery,'],
    'pemeran_utama'=>['ty simpkins,','patrick wilson,','rose byrne,'],
    'sutradara'=>'patrick wilson'
    ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1>Film Favorit</h1>
    <?php foreach($film as $flm){ ?>
    <ul>
    <li>
        <img src="<?= $flm['poster']; ?>" width ="120" height="200">
    </li>
        <li>Judul: <?= $flm ['judul']; ?></li>
        <li>Tahun: <?= $flm ['tahun']; ?></li>
        <li>
            Genre:
            <?php foreach ($flm ['genre'] as $f) {
            echo $f;
        } ?>
        </li>

        <li>pemeran utama:
            <?php foreach ($flm ['pemeran_utama'] as $f) {
            echo $f;
        } ?>
        </li>
        <li> Sutradara: <?= $flm['sutradara']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>