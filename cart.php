<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="/img/favicon.svg" type="image/x-icon">
    <title>Корзина</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <script src="/JS/jquery-3.5.1.min.js"></script>
    <script src="/JS/cart.js"></script>
</head>
<body onLoad="showMyCart();">
<header class="header">
        <div class="container">
            <div class="container_header">
    <div class="header_logo">
    <a href="index.php" class="logo-link"><img src="img/Logo.svg" alt="Logo" class="logo"></a>
    </div>
        <ul class="header_list">
            <li class="header_item">
                <a href="about.php" class="header_link">О нас</a>
            </li>
            <li class="header_item">
                <a href="delivery.php" class="header_link">Доставка</a>
            </li>
            <li class="header_item">
                <a href="contacts.php" class="header_link">Контакты</a>
            </li>
        </ul>
       
        <div class="login">
        <?php
            $link = mysqli_connect("localhost","root","","computershop");
           $query_out = "SELECT * FROM Users WHERE ID = '$_SESSION[logged_user]'";
           $result_out = mysqli_query($link, $query_out);
           $user_out = mysqli_fetch_array($result_out);
             if (isset($_SESSION["logged_user"]))
             {
                
                 echo $user_out['Name'], ' ', $user_out['Surname'],'
            <p>
                <a href="logout.php" class="register_link">Выход</a>
            <p>
            </div>
            <div class="login_logo">
                <a href="profile.php" class="login_logo-link"><img src="img/login-logo.svg" alt="Login-logo" class="login-logo"></a>';
             }
             else
             echo '<p>
                <a href="login.php" class="login_link">Вход</a>
            </p>
            <p>
                <a href="registration.php" class="register_link">Регистрация</a>
            <p>
            </div>
            <div class="login_logo">
                <a href="profile.php" class="login_logo-link"><img src="img/login-logo.svg" alt="Login-logo" class="login-logo"></a>';
            ?>
            
        
        </div>
    </div>
</header>
<div class="navigation">

    <div class="category">

        <ul class="topMenu">
            
            <li>Категория
                <ul class="subMenu">
                <li><a href="processor.php">Процессоры</a></li>
                <li><a href="videocard.php">Видеокарты</a></li>
                <li><a href="mboard.php">Материнские платы</a></li>
                <li><a href="ram.php">Оперативная память</a></li>
                <li><a href="psu.php">Блоки питания</a></li>
                <li><a href="case.php">Корпуса</a></li>
                <li><a href="storage.php">Накопители</a></li>
            </ul></li>
        </ul>
    </div>

<form action="search.php" method="post" class="search_field">
    <input type="search" class="search" name="search" placeholder="Поиск" />
    <input type="submit" name="do_search" value="" class="submit" />
</form>
<div class="cart">
  <a href="cart.php"><img src="img/cart.svg" width="50">
<p>Корзина</p>
</div></a> 
</div>
<div>
<div class="content">
    <div id = "in-check">

    </div>
</div>

</body>
<?php require'footer.php';?>
</html>