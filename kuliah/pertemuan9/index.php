<?php 
$title = 'home';
$students = [
    [
        'nama' => 'zabihullah achmad',
        'npm' => '223040119',
        'email' => 'zaachaf@gmail.com'
        
    ],
    [
        'nama' => 'asep suprianto',
        'npm' => '223040160',
        'email' => 'asep@gmail.com'
        
    ],
];
//echo $_SERVER["REQUEST_URL"];

require('views/index.view.php');
?>