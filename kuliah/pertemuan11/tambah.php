<?php
require('functions.php');

$title = 'Form Tambah Data';

//insert data jika tombol di klik

if(isset($_POST['tambah'])) {
    tambah($_POST);
    //tampilkan pesan jik adata berhasil di tambahkan
    if (tambah($_POST) > 0){
        echo "<script>
        alert ('data berhasil di tambahkan!');
        document.location.href = 'index.php';
        </script>";
    }
}

require('views/tambah.view.php');
