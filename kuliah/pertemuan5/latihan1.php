<?php 
   //array
   //membuat array
   $hari = array ('senin','selasa','rabu');
   $bulan = ['januari','februari','maret'];
   $myArray = ['apgi', 20, false];
   $binatang = ['🦊','🦝','🐮','🐷','🐹'];
   //menampilkan isi array
   //mencetak satu element pada array menggunakan index
   echo $hari[1];
   echo "<hr>";

   //mencetak seluruh isi array
   //var_dump, print_r
   var_dump($hari);
   echo "<hr>";
   print_r($bulan);
   echo "<hr>";
   var_dump($myArray);
   echo "<hr>";
   print_r($binatang);
   echo "<hr>";
   //manipulasi isi array
   //isi element menggunakan indexnya
   $hari[3] = 'kamis';
   print_r($hari);
   echo "<hr>";
   //menambahkan element baru di akhir array menggunakan index kosong[]
   $hari[] = "jum'at";
   $hari[] = "sabtu";
   print_r($hari);
   echo "<hr>";
   
   //menambahkan element baru di akhri array menggunaakan array_push()
   array_push($bulan, 'april', 'mei');
   print_r($bulan);
   echo "<hr>";
   //menambah elemen baru di awal array menggunakan array_unshift
   array_unshift($binatang,'🐰');
   print_r($binatang);
   echo "<hr>";
   //menghapus element di akhir array menggunakan array_pop
   array_pop($hari);
   array_pop($hari);
   print_r($hari);
   echo "<hr>";
   //mengahosu element di awal array menggunakkan array_shift
   array_shift($hari);
   print_r($hari);

   
   ?>
