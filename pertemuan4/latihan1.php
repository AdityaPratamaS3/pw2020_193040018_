<?php 
//$ = nilai awal

//A :diatas 85
//B :70-85
//C :60-70
//D :40-60
//E :dibawah 40

$nilai = 10;
if($nilai >= 85){
    echo'A';
}else if($nilai >=70){
    echo'B';
}else if($nilai >=60){
    echo'C';
}else if($nilai >= 40){
    echo'D';
}else{
    echo"E";
}

?>