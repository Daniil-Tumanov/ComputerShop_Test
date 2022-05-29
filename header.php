<?php
    session_start();
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(88908246, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/88908246" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<body>
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