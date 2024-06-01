<?php

$db = new mysqli("localhost", "root", "", "bd_vakansii");

if (isset($_POST["name"])) {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $patronymic = $_POST["patronymic"];
  $birthdate = $_POST["birthdate"];
  $avatar = $_FILES['avatar']['name'];
  $email = $_POST["email"];
  $password = sha1($_POST["password"]);

  // Запись данных в БД
  $db->query("INSERT INTO `users` ( `name`, `surname`, `patronymic`, `birthdate`,
    `avatar`, `email`, `password`) VALUES 
    ('$name', '$surname', '$patronymic', '$birthdate', 
    '$avatar', '$email', '$password')");
  
  // Загрузка аватара
  if (isset($_FILES['avatar'])) {
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $target_dir = "avatars/";
    $target_file = $target_dir . str_shuffle($permitted_chars) . "." . pathinfo($_FILES['avatar']['name'])['extension'];
    $imageFileType = pathinfo($target_file)['extension'];
    
    // размер файла более 2мб
    if ($_FILES['avatar']['size'] < 2000000) {
      // Разрешение определенных форматов
      if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
          // Попытка загрузить файл
          if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file)) {
              echo "Файл ". htmlspecialchars(basename($_FILES['avatar']['name'])). " был загружен.";
          }
          else {
            echo "Извините, произошла ошибка при загрузке файла.";
          }
      }
      else {
        echo "Извините, разрешены только файлы JPG, JPEG и PNG.";
      }
    }
    else {
      echo "Извините, ваш файл слишком большой.";
    }
  }
}

$db->close();