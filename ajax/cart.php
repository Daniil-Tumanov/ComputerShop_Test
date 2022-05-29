<?php
session_start();
  require '../db.php'; 
  $data = $_POST;
  $action = $data["action"];
  if ($action == 'show'){
     if (!(isset($_SESSION['cart']))){
         echo '<p class="cart__empty">В корзине нет товаров.<p>';
         exit;
     };
     $cart = $_SESSION['cart'];
     if (count($cart) == 0){
         echo '<p class="cart__empty">В корзине нет товаров.<p>';
         exit;
     }
     for ($i = 0; $i < count($cart); $i++){
        $idProduct = $cart[$i]["idProduct"];
        $productsQuery = mysqli_query($link,"SELECT * FROM product WHERE ID = ".$cart[$i]["idProduct"]."");
        while($product = $productsQuery->fetch_assoc()){
          $inc++;
     echo $error, '<div class="cart-items">
     <div class="container__cart">
       <img class="container__cart_img"src=img/'.$product["IMG"].'>
       <div class="container__cart_text">
           <p class="container__cart_name">'.$product["CategoryName"]." ".$product["Name"]." ".strip_tags($product["Description"]).'</h2>
           <div class ="container__cart_desc">
               <p>'.$product["Specifications"].'
     </div>
     </div>
     <div class="counter">
      <button type="button" class="inc" id="dec'.$inc.'">-</button>
      <input type="number" class="count" id="count'.$inc.'" value="1">
      <button type="button" class="inc" id="inc'.$inc.'">+</button>
      <a href="#" onclick="delFromCart('.$product["ID"].')"><p class="remove__p">Удалить из корзины</a></p> 
    </div>  
  <script>
    var counter'.$inc.'=document.getElementById("count'.$inc.'");
    var inc'.$inc.' = document.getElementById("inc'.$inc.'");
    var dec'.$inc.' = document.getElementById("dec'.$inc.'");
    totalInt'.$inc.' = parseInt(total'.$inc.'.innerHTML);
    dec'.$inc.'.onclick = function(){
      this.nextElementSibling.stepDown();
      total'.$inc.'.innerHTML = totalInt'.$inc.' * parseInt(counter'.$inc.'.value) + " р.";
    }
    counter'.$inc.'.oninput = function(){
      total'.$inc.'.innerHTML = totalInt'.$inc.' * parseInt(this.value) + " р.";
    }
    inc'.$inc.'.onclick = function(){
    this.previousElementSibling.stepUp();
    total'.$inc.'.innerHTML = totalInt'.$inc.' * parseInt(counter'.$inc.'.value) + " р.";
  }
  </script> <div class="containter__cart_price">
   <p id="total'.$inc.'">'.$product["Price"].' р.</p>
   </div>
   </div>';
}
   echo '
    
    <div class="payment">
   <p class="sum" id="allPrice"> </p>
</label><input type="radio" class="radio" name="delivery" id="deliv"value="1"><label for="deliv">Доставка</label><br>
</label><input type="radio" class="radio" name="delivery" id="pickup" value="2"><label for="pickup">Самовывоз</label><br>
<input type="submit" name="do_offer" value="Перейти к оплате заказа">
<div class="payment__logo">
<img src="/img/visa_PNG4.png" alt="">
<img src="/img/640px-MasterCard_logo.png" alt="">
<img src="/img/logo-mir 1.png" alt="">
</div>
</div>
</div>';
  }
}



if ($action == 'add'){
  $cart = $_SESSION['cart'];
  $id = $_POST['id'];
  $newProduct["idProduct"] = $id;
  $cart[count($cart)] = $newProduct;
  $_SESSION['cart'] = $cart;
}

if ($action == 'del'){
  $id = $_POST["id"];
  $newCart = array();

  $cart = $_SESSION['cart'];
  for ($i = 0; $i < count($cart); $i++){
      $idProduct = $cart[$i]["idProduct"];
      if ($id != $idProduct){
          $newCart[count($newCart)] = $cart[$i];
      }
  }
  $_SESSION['cart'] = $newCart;
}

?>