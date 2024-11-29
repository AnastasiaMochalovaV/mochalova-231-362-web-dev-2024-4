<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles/form_2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Форма аутентификации</title>
  </head>

  <body class="fon">
    <header>
      <nav>
        <div class="menu">
          <a href="index.php">На главную</a>
        </div>
      </nav>
    </header>
    
    <main>
      <div class="container">
        <h1>Форма для аутентификации</h1>

        <form
          action="https://httpbin.org/post"
          method="POST"
          enctype="multipart/form-data"
        >
          <input type="hidden" name="user_id" value="6" />

          <div class="form-group">
            <label class="form-label" for="name">Логин</label>
            <input
              id="name"
              type="text"
              name="name"
              placeholder="Введите логин"
              required
            />
          </div>

          <div class="form-group">
            <label class="form-label" for="password">Пароль</label>
            <input
              id="password"
              type="password"
              name="password"
              placeholder="Введите пароль"
              required
            />
          </div>

          <div class="form-group">
            <input type="checkbox" name="remember" id="remember" value="yes" />
            <label for="remember">Запомнить меня</label>
          </div>

          <input class="button-main" type="submit" value="Отправить" />
        </form>
      </div>
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
        <p>&copy; <small>Мочалова А. В.</small></p>
      </div>
    </footer>
  </body>
</html>
