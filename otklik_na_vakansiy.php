<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
"root", 
"");
session_start();

$proverka = $db->prepare("SELECT `id` FROM `otkliki` WHERE `id_user` = ?");
$proverka->execute(array($_COOKIE['user']));
$proverka = $proverka->fetch(PDO::FETCH_ASSOC);

if ($proverka == null) {
  $stmt = $db->prepare("INSERT INTO `otkliki` (`id_user`, `id_vakansia`) VALUES (?, ?)");
  $rowsNumber = $stmt->execute(array($_COOKIE['user'], $_GET['vakansia']));

  $_SESSION['success'] = 'Вы успешно откликнулись на эту вакансию!';
  header('Location: '. 'http://kursach/info_vakansia.php?vakansia=' . $_GET['vakansia']);
}
else {
  $_SESSION['success'] = 'Вы уже откликнулись на эту вакансию';
  header('Location: '. 'http://kursach/info_vakansia.php?vakansia=' . $_GET['vakansia']);
}
?>