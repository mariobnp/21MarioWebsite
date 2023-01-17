<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="img/man (1).png" alt="" class="poto">
        </div>
        <div class="text-login">Login</div>
        <div class="input">
            <input type="text" class="username" placeholder="Username">
        </div>
        <div class="input-pw">
            <input type="password" class="password" placeholder="Password">
        </div>
        <div class="button">
            <button class="bt-login"><a href="admin.php">Login</button></a>
        </div>
       <div class="footer">
        <p class="text-footer"><a href="#" class="a-footer">Forgot ur Password ?</a></p>
       </div>
       <div class="sign-in">
        <p class="daftar">Not have acount? <a class="a-daftar" href="sign-in.html">Sign-In</a></p>
       </div>
    </div>
    
</body>
</html>