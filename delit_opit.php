<?php
session_start();
$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
"root", 
"");
//DELETE FROM Products WHERE Manufacturer='Huawei';
$vakansia = $db->prepare("DELETE FROM `work_experience_user` WHERE `id`=?;");
$vakansia = $vakansia->execute(array($_GET['opit']));

$_SESSION['success'] = 'Ваша информация о предыдущем опыте была удалина!';

header('Location: '. 'http://kursach/profile.php?user=' . $_COOKIE['user']);
?>