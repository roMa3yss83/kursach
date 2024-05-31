<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Главная</title>
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

    <link
      rel="stylesheet"
      type="text/css"
      href="css/style.css"
    />
  </head>
  <body>
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

    <div class="qkkd">
      <div class="container">
        <div id="main_main">
          <h1 id="zagolovok"><b>Работа найдётся для каждого</b></h1>
          <div id="pole_main">
            <input
              type="text"
              class="form-control"
              id="firstName"
              placeholder="Введите интересующую вас вакансию"
              value=""
              required=""
            />
            <button type="button" class="btn btn-danger" id="knopka_main">
              Поиск
            </button>
          </div>
        </div>
      </div>
    </div>

    <br />

    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img
            src="https://img.freepik.com/free-photo/man-working-carboard-factory_1303-22912.jpg?t=st=1710841037~exp=1710844637~hmac=369aacd931c5704f952f373a25b10f40e3482c0e2276e58b6541f4a4bcfadb4b&w=1380"
            alt="Bootstrap Themes"
            height="400"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
            Responsive left-aligned hero with image
          </h1>
          <p class="lead">
            Quickly design and customize responsive mobile-first sites with
            Bootstrap, the world’s most popular front-end open source toolkit,
            featuring Sass variables and mixins, responsive grid system,
            extensive prebuilt components, and powerful JavaScript plugins.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
              Primary
            </button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">
              Default
            </button>
          </div>
        </div>
      </div>
    </div>

    <br />

    <div class="container">
      <h2>Рекомендованные вакансии</h2>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                Региональный менеджер (ТМ Плитонит)до 131.000 ₽
              </h5>
              <p class="card-text">MC-Bauchemie, Тольятти</p>
              <a href="#" class="btn btn-primary">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                Менеджер по заказам с сайта (удаленно) от 43.000 до 58.000 ₽
              </h5>
              <p class="card-text">
                Петрович, Строительный Торговый Дом, Самара
              </p>
              <a href="#" class="btn btn-primary">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                Оператор call - центра от 50.000 до 65.000 ₽
              </h5>
              <p class="card-text">МТС, Самара</p>
              <a href="#" class="btn btn-primary">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Сотрудник склада от 72.949 ₽</h5>
              <p class="card-text">ВИТА, Самара</p>
              <a href="#" class="btn btn-primary">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                Менеджер по работе с клиентами от 70.000 ₽
              </h5>
              <p class="card-text">ТехноВуд, Самара</p>
              <a href="#" class="btn btn-primary">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                Работник кухни в Додо Пиццу от 49.000 ₽
              </h5>
              <p class="card-text">
                Додо Пицца (ООО ДОДО ПИЦЦА САМАРА), Самара
              </p>
              <a href="#" class="btn btn-primary">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </div>

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
