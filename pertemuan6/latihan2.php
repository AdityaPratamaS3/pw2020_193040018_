<?php 
//Array Multidimensi
//array yang ada didalam array
//$angka=[index 0,1[indek 0,1,2]3];
$angka=[1,10,[2,3,4],100];
echo $angka[2][1];
echo '<br>';
echo $angka[3];
echo '<hr>';

$angka2= [[1,2,3],[4,5,6],[7,8,9]];
//1 2 3
//4 5 6
//7 8 9

foreach ($angka2 as $baris){
 foreach ($baris as $b){
  echo $b;   
 }
 echo '<br>';
}
echo '<hr>';

?>