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
    $data = $_POST;
    if(isset($data['do_change']))
    {
        $errors = array();  
        if(trim($data['name']) == ''){
            $errors[] = 'Имя не было введено';
        }
        if(trim($data['surname']) == ''){
            $errors[] = 'Фамилия не была введена'; 
        }
        if($data['gender'] == ''){
            $errors[] = 'Пол не был выбран'; 
        }
        if(trim( $data['email']) == ''){
            $errors[] = 'E-mail не был введен'; 
        }
    if($data['password2'] != $data['password']){
        $errors[] = 'Пароли не совпадают'; 
    }
    if($data['password'] == ""){
    if(empty($errors))
    {
        $query = mysqli_query($link,"UPDATE Users SET Name = '$data[name]', Surname = '$data[surname]', Email = '$data[email]', Gender = '$data[gender]' WHERE ID = '$_SESSION[logged_user]'");
        $successMsg = '<hr class="line"><p class="success"; >Данные успешно изменены.</p></hr><script>window.location.href = "profile.php";</script>';
    }
    else
    {
        $errorMsg = '<hr class="line"><p class="error"; >'.array_shift($errors).'</p></hr>';
    }
    }
    else if($data['password'] != "")
    {
        if(empty($errors))
    {
        $pswd = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = mysqli_query($link,"UPDATE Users SET Name = '$data[name]', Surname = '$data[surname]', Email = '$data[email]', Gender = '$data[gender]', Password = '$pswd' WHERE ID = '$_SESSION[logged_user]'"); 
        $successMsg = '<hr class="line"><p class="success"; >Данные успешно изменены.</p></hr><script>window.location.href = "profile.php";</script>';
    }
    else
    {
        $errorMsg = '<hr class="line"><p class="error"; >'.array_shift($errors).'</p></hr>';
    }
    }
    }
    echo '<div class="registration">
    <form action="/change.php" method="POST" class="registration__form">
        <p>Имя</p>
        <input type="text" name="name" value="'.$user_out['Name'].'">
        <p>Фамилия</p>
        <input type="text" name="surname" value='.$user_out['Surname'].'>
        <p>Пол</p>';
        if($user_out['Gender']=='Мужской')
        {
            echo '</label><input type="radio" class="radio" name="gender" id="man" checked value="Мужской"><label for="man">Мужской</label>
            </label><input type="radio" class="radio" name="gender" id="woman" value="Женский"><label for="woman">Женский</label>';
        }
        else{
            echo '</label><input type="radio" class="radio" name="gender" id="man"  value="Мужской"><label for="man">Мужской</label>
            </label><input type="radio" class="radio" name="gender" id="woman" checked value="Женский"><label for="woman">Женский</label>';
        }
    echo '<p>E-mail</p>
        <input type="email" name="email" value='.$user_out['Email'].'>
        <p>Новый пароль</p>
        <input type="password" name="password">
        <p>Подвердите новый пароль</p>
        <input type="password" name="password2">
        <input type="submit" name="do_change" value="Изменить данные"> 
        '.$successMsg, $errorMsg.'
    </form>';
    ?>
    </div>
</div>
</body>
<?php require'footer.php';?>
</html>
