<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <?php $title = "Мочалова А.В. 231-362 лаб.4"; ?>
    <title><?php echo $title; ?></title>
  </head>

  <body class="foto">
    <header>
      <nav>
        <div class="menu">
          <a href="<?php
              $link = '#about';
              $name = 'Обо мне';
              $current_page = false;

              echo $link;
            ?>" class="<?php
              if ($current_page) echo 'selected_menu';
            ?>"><?php echo $name; ?></a>

          <a href="<?php
            $link = '#skills'; 
            $name = 'Навыки'; 
            $current_page = false; 

            echo $link; 
          ?>" class="<?php
            if ($current_page) echo 'selected_menu'; 
          ?>"><?php echo $name; ?></a>

          <a href="<?php
            $link = '#footer'; 
            $name = 'Контакты'; 
            $current_page = false;

            echo $link;
          ?>" class="<?php
            if ($current_page) echo 'selected_menu'; 
          ?>"><?php echo $name; ?></a>

        <div class="buttons">
          <a href="<?php
            $link = 'form.php';
            $name = 'СВЯЗАТЬСЯ';
            $current_page = false;

            echo $link;
          ?>" class="button"><?php echo $name; ?></a>

          <a href="<?php
            $link = 'form_2.php'; 
            $name = 'ВОЙТИ'; 
            $current_page = false; 

            echo $link; 
          ?>" class="button"><?php echo $name; ?></a>
        </div>
      </nav>
    </header>

    <main>
      <section class="home">
        <span>
          <h1>Анастасия Мочалова</h1>
          <h2>Веб-дизайнер</h2>
        </span>
      </section>

      <section id="about" class="about">
        <div class="border-page">
          <h2>Обо мне</h2>

          <div class="info-about">
            <span class="border-text">
              <p>Всем привет!</p>
              <p>
                Меня зовут Настя, мне 19 лет. Я занимаюсь графическим и
                веб-дизайном.
              </p>
              <p>
                Обучаюсь в Московском политехническом университете на факультете
                информационных технологий. Прошла обучающие курсы графического
                дизайна от университета.
              </p>
            </span>

            <?php
              $s = date('s');
              $os = $s % 2; 

              if ($os === 0) {
                $name = 'images/foto2.jpg';
              } else {
                $name = 'images/foto3.jpg';
              }

              echo '<img src="' . $name . '" alt="Меняющаяся фотография">';
            ?>
          </div>
        </div>
      </section>

      <?php $apps = ["Figma", "Photoshop", "Illustrator"]; ?>

      <section id="skills" class="border-page">
        <h2>Навыки</h2>
        <p>Я закончила школу, успешно сдав ЕГЭ с такими результатами:</p>
        <table class="center">
          <thead>
            <tr>
              <th>Предмет</th>
              <th>Баллы</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Русский</td>
              <td>85</td>
            </tr>
            <tr>
              <td>Математика</td>
              <td>70</td>
            </tr>
            <tr>
              <td>Информатика</td>
              <td>80</td>
            </tr>
          </tbody>
        </table>
        <p>
          Работаю в таких приложениях, как Figma, Photoshop и Illustrator, что
          позволяет мне уверенно создавать и редактировать графический контент.
          В настоящий момент изучаю SQL, HTML и Java для углубления знаний в
          области программирования и работы с базами данных.
        </p>
        <ul>
          <?php foreach ($apps as $app) { echo "<li>$app</li>"; } ?>
        </ul>
      </section>
    </main>

    <footer id="footer" class="footer">
      <div class="border-footer">
        <p>
          <a href="tel:+79154379555">+7 (915) 437-95-55</a>
        </p>
        <p>
          <a href="mailto:nastya.m04alova@yandex.ru"
            >nastya.m04alova@yandex.ru</a
          >
        </p>
        <?php date_default_timezone_set('Europe/Moscow'); ?>
        <p>
          Сформировано
          <?php echo date("d.m.Y в H-i:s"); ?>
        </p>
        <p>
          &copy; <small>Мочалова А. В.</small>
        </p>
      </div>
    </footer>
  </body>
</html>
