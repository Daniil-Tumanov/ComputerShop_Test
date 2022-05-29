<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <title><?php $search?></title>
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
$search = trim($data['search']);
$search = strip_tags($search);
$query_src = mysqli_query($link, "SELECT * FROM Product WHERE Name LIKE '%$search%' OR Description LIKE '%$search%'");
if(mysqli_num_rows($query_src) == 0){
  echo "По запросу «".$search."» ничего не найдено";
}else
    echo "<p style='text-allign: center;'>По запросу «".$search."» найдено:</p>";
    while($product = $query_src->fetch_assoc())
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
<?php require 'footer.php';?>
</html>