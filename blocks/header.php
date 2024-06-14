<?php
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $site_title; ?></title>
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
      href="<?php echo $css_file; ?>"
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
        <li><a href="/" class="nav-link px-2">Главная</a></li>
        <li><a href="#" class="nav-link px-2">Новости</a></li>

        <!-- Если куки пользователя не найден, то ссылка на страницу самого пользователя не выйдет -->
        <?php if (isset($_COOKIE['user'])) { ?>
          <li><a href="profile.php?user=<?php echo $_COOKIE['user']; ?>" 
          class="nav-link px-2">Профиль</a></li>
        <?php } ?>
        <?php if (isset($_COOKIE['company'])) { ?>
          <li><a href="profile_company.php?company=<?php echo $_COOKIE['company']; ?>" 
          class="nav-link px-2">Моя компания</a></li>
        <?php } ?>

        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">О нас</a></li>
      </ul>

      <div class="col-md-3 text-end">

        <?php if ((isset($_COOKIE['user'])) or (isset($_COOKIE['company']))) { ?>
          <a class="btn btn-outline-primary me-2" href="exit.php">Выход</a>
        <?php } ?>

        <?php if ((is_null($_COOKIE['user'])) and (is_null($_COOKIE['company']))) { ?>
          <a class="btn btn-outline-primary me-2" href="vhod.php">Вход</a>
          <a href="registration.php" id="knopka_rega" class="btn btn-warning">Регистрация</a>
        <?php } ?>

      </div>
    </header>