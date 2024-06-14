<?php
session_start();

$site_title = 'Инструкция для регистрации своей компании';
$css_file = '';

include("blocks/header.php");
?>

<div class="container">
  <h1>Инструкция для регистрации своей компании</h1>
  <p>Для того, чтобы зарегестрировать свою компанию на нашем сайте, вам достаточно отправить 
    письмо на нашу почту site_vakansii@gmail.com
  </p>
  <p>В письме вы должны указать:</p>
  <ul>
    <li>Введите необходимую информацию о вашей компании</li>
    <ol>
      <li>Полное название</li>
      <li>Юридический адрес</li>
      <li>Отрасль</li>
      <li>Контактные данные для будущих соискателей</li>
    </ol>
    <li>Укажите электронную почту и пароль, которые будут использоваться для входа в систему</li>
    <ol>
      <li>Электронная почта</li>
      <li>Пароль</li>
    </ol>
  </ul>
  <h4>После успешной регистрации</h4>
  <ul>
    <li>Заполните данные своего аккаунта такие как: </li>
    <ol>
      <li>Описание вашей организации</li>
      <li>Логотип</li>
    </ol>
  </ul>
  <h3>Опубликуйте вакансии!</h3>
</div>

<?php
  include("blocks/footer.php");

  session_destroy();
?>
