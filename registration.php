<?php

if (isset($_POST)) {
  $_COOKIE["test"] = $_POST["name"];
}

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Регистрация аккаунта</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/vhod.css" />
  </head>
  <body class="">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"
    >
      <div class="col-md-3 mb-2 mb-md-0">
        <a
          href="/"
          class="d-inline-flex link-body-emphasis text-decoration-none"
        >
          <svg
            class="bi"
            width="40"
            height="32"
            role="img"
            aria-label="Bootstrap"
          >
            <use xlink:href="#bootstrap"></use>
          </svg>
          <img
            class="bi"
            height="32"
            src="images/logo.png"
            alt=""
          />
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2">Главная</a></li>
        <li><a href="#" class="nav-link px-2">Новости</a></li>
        <li><a href="#" class="nav-link px-2">Профиль</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">О нас</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Вход</button>
        <button type="button" id="knopka_rega" class="btn btn-warning">
          Регистрация
        </button>
      </div>
    </header>

    <main>
      <div class="container lox">
        <p style="color: red;">{{ error }}</p>
        <h3>Зарегестрируйтесь для использования нашего сайта на 100%</h3>
        <form method="POST" class="w-50">
          <input type="text" name="name" class="form-control" placeholder="Имя" />
          <input type="text" class="form-control" placeholder="Фамилия" />
          <input type="text" class="form-control" placeholder="Отчество" />
          <div class="mb-3">
            <label for="dateRoz" class="form-label">Дата рождения</label>
            <input
              type="date"
              class="form-control"
              id="dateRoz"
              placeholder="Дата рождания"
            />
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label"
              >Фотография пользователя <i>(необязательное поле)</i></label
            >
            <input class="form-control" type="file" id="formFile" />
          </div>
          <input
            type="email"
            class="form-control"
            placeholder="Электронная почта"
          />
          <input type="password" class="form-control" placeholder="Пароль" />

          <input  class="btn btn-outline-dark" type="submit" value="Войти">
        </form>
      </div>
    </main>

    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Главная</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Новости</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Профиль</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">FAQs</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">О нас</a>
          </li>
        </ul>
        <p class="text-center text-body-secondary">© 2024 Вакансии, Inc</p>
      </footer>
    </div>
  </body>
</html>
