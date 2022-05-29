<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
</head>
<?php require'header.php';?>
<div class="content">
<?php
  require 'db.php'; 
  $data = $_POST;
  if(isset($data['do_registration']))
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
    $check = mysqli_query($link, "SELECT * FROM Users WHERE Email ='$data[email]'");
    if(mysqli_num_rows($check) > 0){
        $errors[] = "Почтовый адрес: $data[email] уже используется";
    }
    if($data['password'] == ''){
        $errors[] = 'Пароль не был введен'; 
    }
    if($data['password2'] != $data['password']){
        $errors[] = 'Пароли не совпадают'; 
    }
    if(empty($errors))
    {
        $pswd = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = mysqli_query($link,"INSERT INTO  Users(Name, Surname, Email, Gender, Password)
        VALUES('$data[name]','$data[surname]','$data[email]','$data[gender]','$pswd')");
        $successMsg = '<hr class="line"><p class="success"; >Вы успешно зарегистрированы. Перейти на страницу <a href="/login.php">входа</a></p></hr>';
    }
    else{
        $errorMsg = '<hr class="line"><p class="error"; >'.array_shift($errors).'</p></hr>';
    }

  }
  ?>
    <div class="registration">
<form action="/registration.php" method="POST" class="registration__form">
    <p>Имя</p>
    <input type="text" name="name" value="<?php echo $data['name']?>">
    <p>Фамилия</p>
    <input type="text" name="surname" value="<?php echo $data['surname']?>">
    <p>Пол</p>
    <?php
    if($data['gender']=='Мужской')
    {
        echo '</label><input type="radio" class="radio" name="gender" id="man" checked value="Мужской"><label for="man">Мужской</label>
        </label><input type="radio" class="radio" name="gender" id="woman" value="Женский"><label for="woman">Женский</label>';
    }
    else if($data['gender']=='Женский')
    {
        echo '</label><input type="radio" class="radio" name="gender" id="man"  value="Мужской"><label for="man">Мужской</label>
        </label><input type="radio" class="radio" name="gender" id="woman" checked value="Женский"><label for="woman">Женский</label>';
    }
    else
    {
        echo '</label><input type="radio" class="radio" name="gender" id="man"  value="Мужской"><label for="man">Мужской</label>
        </label><input type="radio" class="radio" name="gender" id="woman" value="Женский"><label for="woman">Женский</label>';
    }
    ?>
    <p>E-mail</p>
    <input type="email" name="email" value="<?php echo $data['email']?>">
    <p>Пароль</p>
    <input type="password" name="password">
    <p>Подтвердите пароль</p>
    <input type="password" name="password2">
    <input type="submit" name="do_registration" value="Зарегистрироваться">
    
</form>
<?php echo $errorMsg;
echo $successMsg?>
</div>
</div>
</body>
<?php require'footer.php';?>
</html>