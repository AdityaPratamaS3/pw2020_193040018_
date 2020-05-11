<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  registrasi($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h3>Form Registrasi</h3>

  <form action="" method="POST"></form>
  <ul>
    <li>
      <label>
        Username :
        <input type="text" name="username" autofocus autocomplete="off" required>
      </label>
    </li>
    <li>
      <label>
        Password :
        <input type="password" name="password1" required>
      </label>
    </li>
    <li>
      <label>
        konfirmasi Password :
        <input type="password" name="password2" required>
      </label>
    </li>
    <li>
      <button type="submit" name="registrasi">Registrasi</button>
    </li>
  </ul>
</body>

</html>