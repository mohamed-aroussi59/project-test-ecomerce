<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<main class="container mt-3" style="text-align: right!important;">
<form method="POST">

<p class="font-weight-bold">بريد الكتروني </p>
<input class="form-control" type="email" name="email" required/>


<p class="font-weight-bold">كلمة المرور </p>
<input class="form-control" type="password" name="password" required/>

<a class="btn btn-outline-dark mt-3" href="register.php">تسجيل </a>
<button class="btn btn-warning mt-3" type="submit" name="login">تسجيل دخول</button>

</form>

<?php
if(isset($_POST['login'])){
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=codershiyar;",$username,$password);

$login = $database->prepare("SELECT * FROM users WHERE EMAIL = :email AND PASSWORD = :password");
$login->bindParam("email",$_POST['email']);
$login->bindParam("password",$_POST['password']);
$login->execute();
if($login->rowCount()===1){
$user = $login->fetchObject();
if($user->ACTIVATED === 1){

    session_start();
$_SESSION['user'] = $user;

if($user->ROLE ==="USER"){
    header("location:user/index.php",true);
    }else if($user->ROLE ==="ADMIN"){
        header("location:admin/index.php",true);
    }else if($user->ROLE ==="SUPER-ADMIN"){
        header("location:super-admin/index.php",true);
    }

}else{
    echo '
    <div class="alert alert-warning"> 
    يرجى تفعيل حسابك في البداية , لقد ارسلنا 
    رمز تحقق من حسابك إلى بريد الكتروني خاص بك
    </div>
    ';
}
}else{
 echo '
 <div class="alert alert-danger">
 كلمة مرور او بريد الكتروني غير صحيح 
 </div>
 ';   
}
}
?>
</main>
