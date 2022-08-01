<?php
try{
    $db= new PDO("mysql:host=localhost; dbname=veritabaniadi; charset=utf8","kullanıciadi","şifre");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Veri tabanı baglantısı başarılı";
    }
    catch(PDOException $e) {
        die($e->getMessage());
    }
?>