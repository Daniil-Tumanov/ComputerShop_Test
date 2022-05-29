<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <title>Вход</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
</head>
<?php require 'header.php';?>
<div class="content">
    <?php
    require 'db.php'; 
    $data = $_POST;
    $query = "SELECT * FROM Users WHERE Email = '$data[email]'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_array($result);
    $db_email = $user['Email'];
  if(isset($data['do_login']))
  {

    if(password_verify($data['password'], $user['Password']))
    {
        session_start();
        $_SESSION['logged_user'] = $user['ID'];
        echo "<div class='logon'>
        <p class='success'; >Вы успешно вошли как: $user[Name] $user[Surname].<br>
        Перейти на <a href='/index.php'> главную страницу</a><br>
        <a href='logout.php'>Выйти</a></p>
        <script>window.location.href = 'login.php';</script>";
        
    }
    else
    {
      echo '<p class="error"; >Введен неправильный логин или пароль</p>';
        
    }
}
if (isset($_SESSION["logged_user"]))
    {
        echo "<div class='logon'>
        <p class='success'; >Вы успешно вошли как: $user_out[Name] $user_out[Surname].<br>
        Перейти на <a href='/index.php'> главную страницу</a><br>
        <a href='logout.php'>Выйти</a></p>";
    }
    else
    {
    echo' <div class="logon">
    <p class="login__social">Войти с помощью:</p>
   
    <div class="social">
    <a href="#"><img src="/img/vk-com.png" alt="VK"></a>
    <a href="#"><img src="/img/google_PNG19630.png" alt="Google"></a>
    <a href="#"><img src="/img/Yandex-icon-270x270 1.png" alt="Yandex"></a>
    <a href="#"><img src="/img/768px-Facebook_Logo_(2019) 1.png" alt="Facebook"></a>
   
   
</div>
<form action="/login.php" method="POST" class="login__form">
    <p>E-mail</p>
    <input type="email" name="email" id="">
    <p>Пароль</p>
    <input type="password" name="password" id="">
    <input type="submit" name="do_login" value="Войти">
</form>
<a href="#" ><p class="forgot__link"> </a></p>
<hr class="line">
<a href="registration.php"><p class="registration__link">Регистрация</a></p>';
    }
header('Location: /');
?>
</div>
</div>
</body>
<?php require'footer.php';?>
</html>
