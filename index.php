<?php

require_once "db.php";

$stmt = $pdo->query("select * from works");
$works = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Мой сайт</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/lightgallery.min.css">
  <link rel="stylesheet" href="css/lg-transitions.min.css">
</head>
<body>
  <section class="first-screen section-bg">
    <div class="container">
      <div>
        <h1>Веб-разработчик <br> к вашим услугам</h1>
      </div>
      <div>
        <a class="btn btn-bg" onclick="smoothScroll('#about')" href="#">Узнать больше</a>
        <a class="btn btn-outline" onclick="smoothScroll('#portfolio')" href="#">Нанять меня</a>
      </div>
    </div>
    <a class="chevron" href="#">
      <img src="img/arrow-down.svg" alt="scroll">
    </a>
  </section>
  <section>
    <div class="container">
      <h2 id="about">Обо мне</h2>
      <p>
        С другой стороны, повышение уровня гражданского сознания обеспечивает широкому кругу специалистов участие в формировании существующих финансовых и административных условий!
      </p>
      <p>
        Соображения высшего порядка, а также постоянное информационно-техническое обеспечение нашей деятельности, в значительной степени обуславливает создание системы масштабного изменения ряда параметров.
      </p>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 id="portfolio">Портфолио</h2>

      <div id="lightgallery" class="gallery">
        <?php foreach($works as $work): ?>
        <a class="img-wrapper" data-sub-html="<?= $work['name'] ?>" href="<?= $work['file_path'] ?>">
        <img src="<?= $work['file_path'] ?>" /></a>
        <?php endforeach; ?>
      </div>
      

    </div>
  </section>
  <section class="section-bg">
    <div class="container">
      <div class="d-flex">
        <div class="w-60 pr-4">
          <h2>Давайте работать вместе</h2>
          <p>
            Практический опыт показывает, что новая модель организационной деятельности способствует повышению актуальности системы масштабного изменения ряда параметров!
          </p>
        </div>
        <div class="w-40">
          <form action="feedback.php" method="POST">
            <input name="name" type="text" placeholder="Как к вам обращаться">
            <input name="email" type="email" placeholder="Ваш email">
            <textarea name="text" rows="4" placeholder="Сообщение"></textarea>
            <input class="btn btn-bg" type="submit" value="Отправить">
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      Copyright &copy; 2020. Все права защищены.
    </div>
  </footer>
  <script src="js/lightgallery.min.js"></script>
  <script>
    lightGallery(document.getElementById('lightgallery'));

    function smoothScroll(selector) {
      event.preventDefault();
      document.querySelector(selector).scrollIntoView({
        behavior: 'smooth'
      });
    }
  </script>
</body>
</html>