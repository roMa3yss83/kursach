<?php
$site_title = 'Регистрация аккаунта';
$css_file = 'css/vhod.css';

include("blocks/header.php");
?>

    <main>
      <div class="container lox">
        <p style="color: red;">{{ error }}</p>
        <h3>Зарегестрируйтесь для использования нашего сайта на 100%</h3>
        <form action="reg-post.php" method="POST" class="w-50" enctype="multipart/form-data">
          <input type="text" name="name" class="form-control" placeholder="Имя" />
          <input type="text" name="surname" class="form-control" placeholder="Фамилия" />
          <input type="text" name="patronymic" class="form-control" placeholder="Отчество" />
          <div class="mb-3">
            <label for="dateRoz" class="form-label">Дата рождения</label>
            <input
              type="date"
              class="form-control"
              id="dateRoz"
              placeholder="Дата рождания"
              name="birthdate" 
            />
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label"
              >Фотография пользователя <i>(необязательное поле)</i></label
            >
            <input class="form-control" name="avatar" type="file" id="formFile" />
          </div>
          <input
            name="email" 
            type="email"
            class="form-control"
            placeholder="Электронная почта"
          />
          <input type="password" name="password" class="form-control" placeholder="Пароль" />

          <input  class="btn btn-outline-dark" type="submit" value="Войти">
        </form>
      </div>
    </main>

<?php include("blocks/footer.php") ?>