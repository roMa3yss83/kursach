<?php
$site_title = 'Вход в аккаунт';
$css_file = 'css/vhod.css';

include("blocks/header.php");
?>

    <main>
      <div class="container lox">
        <form action="" class="w-50">
          <input
            type="email"
            class="form-control"
            placeholder="Электронная почта"
          />
          <input type="password" class="form-control" placeholder="Пароль" />
          <button class="btn btn-outline-dark">Войти</button>
        </form>
      </div>
    </main>

<?php include("blocks/footer.php") ?>
