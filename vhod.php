<?php
$site_title = 'Вход в аккаунт';
$css_file = 'css/vhod.css';

include("blocks/header.php");
?>

    <main>
      <div class="container lox">
        <form action="scripts/vhod-post.php" class="w-50" method="POST">
          <input
            type="email"
            name="email"
            class="form-control"
            placeholder="Электронная почта"
          />
          <input type="password" name="password" class="form-control" placeholder="Пароль" />
          <input  class="btn btn-outline-dark" type="submit" value="Войти">
        </form>
      </div>
    </main>

<?php include("blocks/footer.php") ?>