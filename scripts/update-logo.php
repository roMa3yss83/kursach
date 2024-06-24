<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
"root", 
"");
print_r($_FILES['avatar']['name']);

if ($_FILES['avatar']['name'] != '') {
    echo 1;
    $target_dir = "../avatars/";

    // Добавление файлу уникальное имя
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $new_name = str_shuffle($permitted_chars);
    $target_file = $target_dir . $new_name . "." . pathinfo($_FILES['avatar']['name'])['extension'];
    
    $imageFileType = pathinfo($target_file)['extension'];
    
    // размер файла более 2мб
    if ($_FILES['avatar']['size'] < 2000000) {
        echo 2;
      // Разрешение определенных форматов
      if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
        echo 3;
          // Попытка загрузить файл
          if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file)) {
            echo 4;
              $avatar = $new_name . "." . pathinfo($_FILES['avatar']['name'])['extension'];
              $user = $db->prepare("UPDATE `companys` SET `logo` = ? WHERE `id` = ?");
              $user->execute(array($avatar, $_COOKIE['company']));
          }
      }
    }
  }
