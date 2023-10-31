<?php
session_start();
require "../include/db_connect.php";

if(isset($_POST["registrasi"])){
    $username = strtolower($_POST["username"]);
    $email = strtolower($_POST["email"]);
    $age = $_POST ["age"];
    $pass = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if($pass === $cpassword){
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username FROM regist where username='$username' ");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username sudah digunakan');
                    document.location.href = 'regist.php';
                </script>";
        }else{
            $sql = "INSERT INTO regist VALUES ('', '$username', '$email', '$age', '$pass')";
            $result = mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn)> 0){
                echo "
                <script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'FormLogin.php';
                </script>" ;
            }else{
                echo "
                <script>
                    alert('Registrasi Gagal');
                    document.location.href = 'regist.php';
                </script>" ;
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylelog.css">
    <title>Register</title>
</head>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type-number] {
        -moz-appearance: textfield;
    }
</style>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="" method="POST">
                <div class="field input">
                    <label for="username">username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">CPassword</label>
                    <input type="password" name="cpassword" id="password" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <input type="submit" name="registrasi" value="Masuk" class="btn" required>
                </div>

                <div class="links">
                    Already a member? <a href="../php/FormLogin.php">Login Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>