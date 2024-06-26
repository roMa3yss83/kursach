<?php
session_start();

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
}

$company = $db->prepare("SELECT `password`, `id` FROM `companys` WHERE `email` = ?");
$company->execute(array($email));

$companyArray = $company->fetch(PDO::FETCH_ASSOC);

$user = $db->prepare("SELECT `password`, `id` FROM `users` WHERE `email` = ?");
$user->execute(array($email));

$userArray = $user->fetch(PDO::FETCH_ASSOC);

if (isset($userArray['id'])) {
    // Проверка на верность пароля
    if ($userArray["password"] == sha1($_POST["password"])) {
        // Куки устанавливаются на 15 дней
        setcookie("user", $userArray['id'], time() + (60*60*24*15), '/');

        $_SESSION['success'] = 'Вы успешно вошли в аккаунт!';
        header('Location: '. '/');
    }
    else {
        echo 'Ошибка: пароль не верный';
    }
}
else if (isset($companyArray['id'])) {
    if ($companyArray["password"] == sha1($_POST["password"])) {
        // Куки устанавливаются на 15 дней
        setcookie("company", $companyArray['id'], time() + (60*60*24*15), '/');

        $_SESSION['success'] = 'Вы успешно вошли в аккаунт!';
        header('Location: '. '/');
    }
    else {
        echo 'Ошибка: пароль не верный';
    }
}
else {
    echo 'Пользователя с таким email не существует!';
}