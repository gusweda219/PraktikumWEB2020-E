<?php
error_reporting(0);
session_start();
if($_SESSION['role']=="admin") {
    header("Location: admin");
}

elseif ($_SESSION['role']=="pegawai") {
    header("Location: pegawai");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">    
        <h3>USER LOGIN</h3>
        <form action="login.php" method="post">
            <div class="input">
                <input type="text" name="username" placeholder="username" required="required">
            </div>
            <div class="input">
                <input type="password" name="password" placeholder="password" required="required">
            </div>
            <input type="submit" name="submit" value="login" class="submit">
        </form>
    </div>
</body>
</html>
