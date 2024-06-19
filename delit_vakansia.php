<?php
session_start();
$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
"root", 
"");
//DELETE FROM Products WHERE Manufacturer='Huawei';
$vakansia = $db->prepare("DELETE FROM `vakansii` WHERE `id`=?;");
$vakansia = $vakansia->execute(array($_GET['vakansia']));

$_SESSION['delit'] = 'Ваша вакансия была удалина!';

header('Location: '. 'http://kursach/profile_company.php?company=' . $_COOKIE['company']);
?>