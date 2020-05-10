<?php 
//ARRAY didalam array
 $mahasiswa=[
 ['Aditya Pratama','193040018','193040018.aditya@mail.ac.id','Teknik Informatika'],
 ['Restu Suhary','193040028','Muhammadrestu@.gmail.com','Teknik mesin'],
 ['piki amd','193040017','pikiamd@gmail.com','Teknik Komputer'],
 ['Abdul tampan','193040014','AbdulHadi@gmail.com','Teknik Informasi']
];
//  echo $mahasiswa[2][0];
// print_r($mahasiswa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h3>Daftar Mahasiswa</h3>
<?php foreach($mahasiswa as $mhs){ ?>
    <ul>
        <li>Nama : <?php echo $mhs[0]; ?></li>
        <li>NRP : <?php echo $mhs[1]; ?></li>
        <li>Email : <?php echo $mhs[2]; ?></li>
        <li>Jurusan : <?php echo $mhs[3]; ?></li>
    </ul>
<?php } ?>
    
</body>
</html>