<?php 
$nama1 = "zabihullah";
$nama2 = "achmad afghiansyah";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $nama1 . " " . $nama2 . "<br>";
    } else if ($i % 3 == 0) {
        echo $nama1 . "<br>";
    } elseif ($i % 5 == 0) {
        echo $nama2 . "<br>";
    } else {
        echo $i . "<br>";
    }
}

?>

