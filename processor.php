<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <title>Процессоры</title>
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
        $productsQuery = mysqli_query($link,"SELECT * FROM product WHERE IdCategory = 1
         ORDER BY price ASC ");
        while($product = $productsQuery->fetch_assoc())
        {
            echo " <a href = '#'>
            <div class='containerPos'>
              <img class='containerImg' src=img/".$product['IMG'].">
            <div class='containerText'>
              <h2 class='containerPrice'>".$product['Price']."&#8381;</h2>
              <div class ='containerName'>
              <p>".$product['Name']."</p>
              <p>".$product['Description']."</p>
              <input type='submit' value='Добавить в корзину' class='addtocart' onClick='addToCart(".$product['ID'].")'>
            </div>
            </div>
            </div></a>";
        }
        ?>
        </body>
        <footer>
<?php require 'footer.php';?>
</html>