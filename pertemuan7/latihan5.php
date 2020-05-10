<?php 
//SUPERGLOBALS
//adalah variabel bawaan php
//yang bentuknya array associative
//bisa kita pakai kapanpun
//$_GET
//$_POST
//$_SESSION
//$_COOKIE
//$_SERVER

//$_GET
//bisa menangkap nilai di URL
//dengan menambahkan ? di akhir URL
//http://localhost/pw/pertemuan7/latihan5.php?nama=aditya
print_r ($_GET);
echo '<hr>';

echo "<h1>Selamat Datang,".$_GET['nama']."</h1>";
echo '<hr>';

//$_POST
//mengambiol data dari form (hrml)
?>