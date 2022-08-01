<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php
ob_start();
session_start();
require 'baglan.php';

if(isset($_POST['kayit'])){

    $username=htmlspecialchars($_POST['username']);
    $password=md5(htmlspecialchars($_POST['password']));
    $passwordagain=md5(htmlspecialchars($_POST['password_again']));

    if(empty($username)||empty($password)||empty($passwordagain)){
        echo'<h3>Lütfen Tüm Alanları Doldurunuz!!!!</h3><br><h3>Kayıt Sayfasına Yönlendiriliyorsunuz...</h3>';
        header("refresh:3,url=kayit.php");

    }
    elseif($password!=$passwordagain){
        echo'<h3>Girdiginiz şifreler aynı degildir.!!!!</h3><br><h3>Kayıt Sayfasına Yönlendiriliyorsunuz...</h3>';
        header("refresh:3,url=kayit.php");
    }
    else{//veritabanına kayıt
        $sorgu=$db->prepare('INSERT INTO kullanici SET user_name= ? ,user_password=?');
        $ekle=$sorgu->execute([$username,$password]);
        if($ekle){
        echo'<h3>Kayıt Başarıyla Tamamlanmıştır...</h3><br><h3>Giriş Sayfasına Yönlendiriliyorsunuz...</h3>';
        header("refresh:3,url=index.php");

        }
        else{
        echo'<h3>Bir hata meydana geldi tekrar kontrol ediniz!!!</h3><br><h3>Kayıt Sayfasına Yönlendiriliyorsunuz...</h3>';
        header("refresh:3,url=kayit.php");
        }

    }

}

if(isset($_POST['giris'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    if(empty($username)||empty($password)){
        echo'<h3>Lütfen Tüm Alanları Doldurunuz!!!!</h3><br><h3>Giris Sayfasına Yönlendiriliyorsunuz...</h3>';
        header("refresh:3,url=index.php");  
    }
    else{
        $kullanicisor=$db->prepare('SELECT * FROM kullanici WHERE user_name= ? && user_password= ?');
        $kullanicisor->execute([$username,$password]);

        $say=$kullanicisor->rowCount();
        if($say==1){
            $_SESSION['username']=$username && $_SESSION['password']=$password;
        	header("Location:anasayfa.php");
            exit;

        }
        else{
            echo'<h3>Kullanıcı adı veya şifre hatalı tekrar kontrol ediniz!!!</h3><br><h3>Giriş Sayfasına Yönlendiriliyorsunuz...</h3>';
            header("refresh:3,url=index.php");

        }
    }

}

    
?>