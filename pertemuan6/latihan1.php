<?php 
//Array 
//menyimpan nilai banyak
//array cara lama
$mhs =array('Aditya','Pratama','suherlan','Boy');
//array cara baru
$angka =[16,03,2001,-14,1];
$myArr =[10,'pemrograman web',true];
//cara mencetak array
//array dimulai dari 0
echo $mhs[2];
echo '<br>';
echo $myArr[1];
echo '<hr>';
//mencetak seluruh array
//count untuk menampilkan semua nilai
for($i=0;$i < count($mhs);$i++){
    echo $mhs[$i];
    echo '<br>';
}
    echo '<hr>';

//mencetak menggunakan foreach
//utuk user
foreach ($mhs as $mh) {
    echo $mh;
    echo '<br>';
}
    echo '<hr>';

//mencetak untuk debugging
//var_dump() / print_r()

//var_dump() = lebih lengkap
var_dump($mhs);
echo '<hr>';
//print_r() = lebih ringkas
print_r($myArr);
echo '<hr>';


?>