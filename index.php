<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <title>Магазин компьютерных комплектующих</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
    <script src="/JS/jquery-3.5.1.min.js"></script>
    <script src="/JS/cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<?php require'header.php';?>
</div>
<div class="content">
    <div class="slider">
        <div class="slider__wrapper">
          <div class="slider__items">
            <div class="slider__item slider__item_1">
              <span class="slider__item_inner">
                <span class="slider__item_img">
                  <img class="slider__item_photo" src="img/RTX-2080.png" alt="2080">
                </span>
                <span class="slider__item_testimonial">
                  <span class="slider__item_name">GIGABYTE AORUS</span>
                  <span class="slider__item_post">GeForce RTX 2080 SUPER</span>
                  <span class="slider__item_text">
                    Мощнейшая видеокарта с поддержкой новых технологий ретрейсинга. Уже доступна в магазине.
                  </span>
                  <span class="slider__item_action">
                    <a class="btn" href="#" onClick='addToCart("17")'>Купить за 68 590р.</a>
                  </span>
                </span>
              </span>
            </div>
            <div class="slider__item slider__item_2">
              <span class="slider__item_inner">
                <span class="slider__item_img">
                  <img class="slider__item_photo" src="/img/i9.png" alt="">
                </span>
                <span class="slider__item_testimonial">
                  <span class="slider__item_name">Intel Core</span>
                  <span class="slider__item_post">i9-9900 BOX</span>
                  <span class="slider__item_text">
                   Мощный восьмиядерный процессор подходящий для решения любых задач. Доступен для покупки.
                  </span>
                  <span class="slider__item_action">
                    <a class="btn" href="#" onClick='addToCart("2")'>Купить за 35 690р.</a>
                  </span>
                </span>
              </span>
            </div>
            <div class="slider__item slider__item_3">
              <span class="slider__item_inner">
                <span class="slider__item_img">
                  <img class="slider__item_photo" src="/img/Asus-rog.png" alt="">
                </span>
                <span class="slider__item_testimonial">
                  <span class="slider__item_name">ASUS ROG</span>
                  <span class="slider__item_post">GTX 1650 STRIX</span>
                  <span class="slider__item_text">
                    Бюджетная видеокарта построеная на графическом процессоре Turing. Оснащенная продвинутой системой охлаждения и оптимизированной мощностью для максимальной игровой производительности.
                  </span>
                  <span class="slider__item_action">
                    <a class="btn" href="#" onClick='addToCart("12")'>Купить за 14 590р.</a>
                  </span>
                </span>
              </span>
            </div>
          </div>
          <a class="slider__control slider__control_prev" href="#" role="button"></a>
          <a class="slider__control slider__control_next" href="#" role="button"></a>
        </div>
    </div>
    <script src="/JS/slider.js"></script>
    <div class="popular">
      <p>Популярные товары</p>
      <hr class="line">
      <a href = "#">
				<div class="containerPos">
					<img class="containerImg" src="img/ryzen-5.png">
				<div class="containerText">
          <h2 class="containerPrice">14590&#8381;</h2>
          <div class ="containerName">
          <p>AMD Ryzen 5 </p>
          <p>3600</p>
          <p>BOX</p>
          <input type='submit' value='Добавить в корзину' class='addtocart' onClick='addToCart("4")'>
				</div>
				</div>
        </div></a>
        <a href = "#">
          <div class="containerPos">
            <img class="containerImg" src="img/TUF3-GTX1660TI-O6G-GAMING.png">
          <div class="containerText">
          <h2 class="containerPrice">17990&#8381;</h2>
          <div class ="containerName">
          <p>ASUS TUF Gaming</p>
          <p>GeForce GTX 1660 OC</p>
          <p>[TUF-GTX1660-O6G-GAMING]</p>
          <input type='submit' value='Добавить в корзину' class='addtocart' onClick='addToCart("13")'>
          </div>
          </div>
          </div></a>
          <a href = "#">
            <div class="containerPos">
              <img class="containerImg" src="img/ryzen-threadripper.png">
            <div class="containerText">
              <h2 class="containerPrice">22990&#8381;</h2>
              <div class ="containerName">
              <p>AMD Ryzen</p>
              <p>Threadripper 1920X</p>
              <p>BOX</p>
              <input type='submit' value='Добавить в корзину' class='addtocart' onClick='addToCart("8")'>
            </div>
            </div>
            </div></a>
    </div>
</body>
<?php require'footer.php';?>
</html>
