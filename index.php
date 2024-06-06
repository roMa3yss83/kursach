<?php
session_start();

$site_title = 'Главная';
$css_file = 'css/style.css';

include("blocks/header.php");
?>

<div class="container">
  <!--Сообщение о регистрации-->
  <?php if(isset($_SESSION['success'])) { ?>
  <div class="alert alert-success" role="alert">
      <?php echo $_SESSION['success']; ?>
  </div>
  <?php } ?>
</div>

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

<?php
  include("blocks/footer.php");

  session_destroy();
?>
