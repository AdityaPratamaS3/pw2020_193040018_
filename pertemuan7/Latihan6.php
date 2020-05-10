<?php 
//$_POST
//mengambiol data dari form (hrml)
//aaction unutk mengirim data
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h3>Form Login</h3>
    <form method="post"action="latihan7.php">
        <ul>
            <li>
                <label for="username">Username :</label><br>
                <input type="text"name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label><br>
                <input type="password"name="password" id="password">
            </li>
            <li>
                <button type="submit">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>