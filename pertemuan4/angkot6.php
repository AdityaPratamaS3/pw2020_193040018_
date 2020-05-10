<?php
for ($no_angkot =1; $no_angkot <=10; $no_angkot++){
    if($no_angkot ==8 || $no_angkot ==10||$no_angkot ==5){
    echo "Angkot No. $no_angkot sedang lembur.
    <br>";
    }else if ($no_angkot <7){
        echo"Angkot No. $no_angkot beroperasi dengan baik.
        <br>";
}else{
    echo"Angkot No. $no_angkot sedang tidak beroperasi. 
    <br>";
}
}