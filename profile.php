<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <title>Профиль</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <script src="/JS/jquery-3.5.1.min.js"></script>
    <script src="/JS/cart.js"></script>
</head>
<?php require 'header.php';?>
<div class="content">
<div class="popular">
<?php
  require 'db.php'; 
  if(isset($_SESSION["logged_user"]))
       {
         echo "<div class='logon'>
         <div class='change__form'>
         <p>Имя пользователя: ".$user_out['Name']."</p>
         <p>Фамилия пользователя: ".$user_out['Surname']."</p>
         <p>Пол: ".$user_out['Gender']."</p>
         <p>E-mail: ".$user_out['Email']."</p>
         <form method='LINK' action='change.php'>
         <input type='submit' value='Изменить данные'>
         </form>
         </div>
         </div>";
       }
    else
    {
        echo '<p class="info">Вы не авторизированы. Перейдите на страницу <a href="login.php">входа</a> или <a href="registration.php">регистрации</a></p>';
    }
    ?>
