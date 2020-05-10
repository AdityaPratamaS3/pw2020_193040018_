<?php 
//contoh ARRAY ASSOCIATIVE
 $mahasiswa=[
 [
     'nama'     => 'Aditya Pratama',
     'nrp'      => '193040018',
     'email'    => '193040018.aditya@mail.ac.id',
     'jurusan'  => 'Teknik Informatika'
],
 [
     'nama'     => 'Restu Suhary',
     'nrp'      => '193040028',
     'email'    => 'Muhammadrestu@.gmail.com',
     'jurusan'  => 'Teknik mesin'
],
 [
     'nama'     => 'piki amd',
     'nrp'      => '193040017',
     'email'    => 'pikiamd@gmail.com',
     'jurusan'  => 'Teknik Komputer'
],
 [
     'nama'     => 'Abdul tampan',
     'nrp'      => '193040014',
     'email'    =>' AbdulHadi@gmail.com',
     'jurusan'  =>'Teknik Informasi'
]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        h3{
            color:grey;
            font-size:100px;
        }
    </style>
</head>
<body>
<h3>Daftar Mahasiswa</h3>
<?php foreach($mahasiswa as $mhs){ ?>
    <ul>
        <li>Nama : <?php echo $mhs['nama']; ?></li>
        <li>NRP : <?php echo $mhs['nrp']; ?></li>
        <li>Email : <?php echo $mhs['email']; ?></li>
        <li>Jurusan : <?php echo $mhs['jurusan']; ?></li>
    </ul>
<?php } ?>
    
</body>
</html>












