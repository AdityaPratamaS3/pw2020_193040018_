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
    $angka2= [[1,2,3],[4,5,6],[7,8,9]];
    foreach($angka2 as $a){
        foreach($a as $b){
            echo "<div class= 'kotak'>$b</div>";
        }
        echo '<br>';
        echo'<div class="clear"></div>';
    }
    echo "<hr>";
?>
</body>
</html>