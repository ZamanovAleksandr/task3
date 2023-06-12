<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body class="container">
   <nav>
    <ol>
        <li><a href="../index.php">Главная</a></li>
        <li><a href="../reg/reg.php">Регистрация</a></li>
        <li><a href="../login/login.php">Вход</a></li>
        <li><a href="../login/logout.php">Выход</a></li>
        <li><a href="../form_task3/form.php">Доска объявлений</a></li>
    </ol>
   </nav>
   <main>
    <h1><?= $header ?></h1>
    <div>
        <?= $content ?>
    </div>
   </main>
   
   <footer class="footer-section">
    <div style="float: right";>
      <script src="https://yastatic.net/share2/share.js"></script>
      <div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,telegram,twitter,whatsapp,moimir"></div>
    </div>
    <div> сайт разработан Заманов Александр, Copyright © 2023</div>
  </footer>
  
</html>