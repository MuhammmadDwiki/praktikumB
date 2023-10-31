<?php
session_start();
require "../include/db_connect.php";

if(isset($_POST["login"])){
    $username = strtolower($_POST["username"]);
    $pass = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM regist WHERE username = '$username' ");
    if ($result) {
        if (mysqli_num_rows($result) >= 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($pass, $row['password'])) {

                $_SESSION['logged'] = true;

                header("Location: dashboard.php");
                exit;
            }  else {
                echo "gagal masuk";
            }
    }
    $error = true; //password kita masukkin apa ga 
}}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylelog.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <a href="../views/WebMainan.html"> Back To Menu</a>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="login" value="Login" required>
                </div>

                <div class="links">
                    Don't have account? <a href="../php/register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>