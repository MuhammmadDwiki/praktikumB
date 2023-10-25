<?php

$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];
$password = $_POST['password'];





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist</title>
    <link rel="stylesheet" href="../style/hasil.css">
</head>
<body>
    <section class="profil">
        <div class = "border">
            <h1>User</h1>
            <p>Username:<?= $username?></p><br>
            <p>Email:<?= $email?></p><br>
            <p>Age:<?= $age?></p><br>
            <p>Password:<?= $password?></p>
        </div>
    </section>
</body>
</html>
