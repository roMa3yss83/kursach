<?php
session_start();

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");

if ($_POST["name"] != '') {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $patronymic = $_POST["patronymic"];
  $birthdate = $_POST["birthdate"];
  $avatar = $_FILES['avatar']['name'];
  $email = $_POST["email"];
  $password = sha1($_POST["password"]);

  if ($_FILES['avatar']['name'] == '') {echo 'нет ниче';}
  // Загрузка аватара
  if ($_FILES['avatar']['name'] != '') {
    $target_dir = "../avatars/";

    // Добавление файлу уникальное имя
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $new_name = str_shuffle($permitted_chars);
    $target_file = $target_dir . $new_name . "." . pathinfo($_FILES['avatar']['name'])['extension'];
    
    $imageFileType = pathinfo($target_file)['extension'];
    
    // размер файла более 2мб
    if ($_FILES['avatar']['size'] < 2000000) {
      // Разрешение определенных форматов
      if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
          // Попытка загрузить файл
          if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file)) {
              $avatar = $new_name . "." . pathinfo($_FILES['avatar']['name'])['extension'];
          }
      }
      else {
        $_SESSION['error_reg'] = "Извините, разрешены только файлы JPG, JPEG и PNG.";
        header('Location: '. 'http://kursach/registration.php');
      }
    }
    else {
      $_SESSION['error_reg'] = "Извините, ваш файл слишком большой.";
      header('Location: '. 'http://kursach/registration.php');
    }
  }
  else {
    $avatar = 'unknown.jpg';
  }

  // Добавление данных в БД
  $stmt = $db->prepare("INSERT INTO `users` (`name`, `surname`, `patronymic`, `birthdate`,
  `avatar`, `email`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $rowsNumber = $stmt->execute(array($name, $surname, $patronymic, $birthdate, 
     $avatar, $email, $password));
}

// Находим id нового пользователя для передачи в куки
$user = $db->prepare("SELECT id FROM `users` WHERE `email` = ?");
$user->execute(array($email));
$userID = $user->fetch(PDO::FETCH_ASSOC);

// Куки устанавливаются на 15 дней
setcookie("user", $userID['id'], time() + (60*60*24*15), '/');

$_SESSION['success'] = 'Вы успешно зарегистрировались!';

header('Location: '. '/');