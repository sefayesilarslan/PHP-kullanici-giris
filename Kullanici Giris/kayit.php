<?php
require 'baglan.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="login">
    <div class="login-screen">
        <div class="app-title">
            <h1>Kayıt Ol</h1>
        </div>
        <form action="islem.php" method="POST">
        <div class="login-form">
            <div class="control-group">
                <input type="text" name="username" class="login-field" placeholder="Kullnıcı adı" id="login-name">
                <label class="login-field-icon fui-user" for="login-name"></label>
            </div>
            <div class="control-group">
            <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
            <label class="login-field-icon fui-user" for="login-pass"></label>
            </div>
            <div class="control-group">
            <input type="password" name="password_again" class="login-field" placeholder="Şifre Tekrar" id="login-pass">
            <label class="login-field-icon fui-user" for="login-pass"></label>
            </div>
            </div>
            <button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>
            </form>
            <a href="index.php"><button   class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
        
    </div>
</div>
    
</body>
</html>