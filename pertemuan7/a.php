	<?php
$mahasiswa = [
[
     ‘nama’      => ‘Sandhika Galih’,
     ‘nrp’          => ‘043040023’,
     ‘email’      => ‘sandhikagalih@unpas.ac.id’,
     ‘jurusan’  =>  ‘Teknik Informatika’
],
[
     ‘nama’      => ‘Doddy ferdiansyah’,
     ‘nrp’          => ‘14040004’,
     ‘email’      => ‘doddy@unpas.ac.id’,
     ‘jurusan’  =>  ‘Teknik Mesin’

]
];
              ?>
<!DOCTYPE html>
<html lang=”en”>
<head>
             <title>Daftar Mahasiswa</title>
</head>
<body>
<php foreach($mahasiswa as $mhs){ ?>
      <ul>
             <li>Nama : <?php echo $mhs [‘nama’];?></li>
             <li>NRP : <?php echo $mhs [‘nrp’];?></li>
             <li>Email : <?php echo $mhs [‘email’];?></li>
             <li>Jurusan : <?php echo $mhs [‘jurusan’];?></li>
       </ul>
<?php } ?>

</body>
</html>

