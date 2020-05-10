<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
    <style>
    .kotak{
        height:50px;
        width:50px;
        background-color:pink;
        text-align:center;
        line-height:50px;
        transition:0.5s;
        float:left;
        margin:3px;
    }
    .kotak:hover{
        transform:rotate(360deg);

    }
    .clear{
        clear:both;
    }
    
    </style>
</head>
<body>
<?php 
//baris $i
//kolom $j
for($i =1; $i <=3; $i++){
    for($j =1;$j <=$i; $j++){
echo"<div class='kotak'>$i</div>";
}
echo'<div class="clear"></div>';
}
?>
</body>
</html>

<br>;