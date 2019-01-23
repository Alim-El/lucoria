<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="fonts/stylesheet.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lucoria</title>
</head>
<body>
  <?php include ("sections/header.php");?>

  <main>
  <?php include ("sections/section-present.php");?>
  </main>

  <div id="requast-call" class="modal requast-call">
    <div class="modal-conteiner full-price__conteiner">
      <span class="close-modal">&times;</span>
      <form class="modal-form" action="">
        <h2 class="modal-title black-txt">ЗАКАЗАТЬ ЗВОНОК</h2>
        <br>
        <span class="modal-text black-txt">Оставьте заявку, и наш менеджер перезвонит вам и ответит на все ваши вопросы</span>

        <input class="input modal-input" type="text" placeholder="Введите вашe имя">
        <input class="input modal-input" type="text" placeholder="Введите ваш телефон">

        <input class="button modal-btn" type="submit" value="Заказать звонок">
        <br>
        <span class="modal-phone black-txt">или позвоните нам по номеру: <strong>8 (866) 200 00 00</strong></span>

        <p class="pravicy black-txt">Вводя свои данные, вы соглашаетесь с <a class="pravicy-link" href="#">политикой конфиденциальности</a></p>
      </form>
    </div>
  </div>

  <div id="full-price" class="modal full-price">
    <div class="modal-conteiner full-price__conteiner">
      <span class="close-modal">&times;</span>
      <form class="modal-form" action="">
        <h2 class="modal-title black-txt">ПОЛУЧИТЬ ПОЛНЫЙ ОПТОВЫЙ ПРАЙС</h2>
        <br>
        <span class="modal-text black-txt">Заполните форму, и мы вышлем вам прайс на электронную почту</span>

        <input class="input modal-input" type="text" placeholder="Введите ваш e-mail">

        <input class="button modal-btn" type="submit" value="Отправить">
        <br>
        <span class="modal-phone black-txt">или позвоните нам по номеру: <strong>8 (866) 200 00 00</strong></span>

        <p class="pravicy black-txt">Вводя свои данные, вы соглашаетесь с <a class="pravicy-link" href="#">политикой конфиденциальности</a></p>
      </form>
    </div>
  </div>

  <div id="full-product" class="modal full-product">
    <div class="modal-conteiner full-price__conteiner">
      <span class="close-modal">&times;</span>
      <form class="modal-form" action="">
        <h2 class="modal-title black-txt">ПОЛУЧИТЬ КАТАЛОГ ПРОДУКЦИИ</h2>
        <br>
        <span class="modal-text black-txt">Заполните форму, и мы вышлем вам прайс на электронную почту</span>

        <input class="input modal-input" type="text" placeholder="Введите ваш e-mail">

        <input class="button modal-btn" type="submit" value="Отправить">
        <br>
        <span class="modal-phone black-txt">или позвоните нам по номеру: <strong>8 (866) 200 00 00</strong></span>

        <p class="pravicy black-txt">Вводя свои данные, вы соглашаетесь с <a class="pravicy-link" href="#">политикой конфиденциальности</a></p>
      </form>
    </div>
  </div>

  <div id="detail-info" class="modal detail-info">
    <div class="modal-conteiner full-price__conteiner">
      <span class="close-modal">&times;</span>
      <form class="modal-form" action="">
        <h2 class="modal-title black-txt">ПОЛУЧИТЬ ПОДРОБНУЮ ИНФОРМАЦИЮ</h2>
        <br>
        <span class="modal-text black-txt">Оставьте заявку, и наш менеджер перезвонит вам и ответит на все ваши вопросы</span>

        <input class="input modal-input" type="text" placeholder="Введите вашe имя">
        <input class="input modal-input" type="text" placeholder="Введите ваш телефон">

        <input class="button modal-btn" type="submit" value="Заказать звонок">
        <br>
        <span class="modal-phone black-txt">или позвоните нам по номеру: <strong>8 (866) 200 00 00</strong></span>

        <p class="pravicy black-txt">Вводя свои данные, вы соглашаетесь с <a class="pravicy-link" href="#">политикой конфиденциальности</a></p>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="main.js"></script>
</body>
</html>