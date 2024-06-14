<?php
$site_title = 'Добавление навыков';
$css_file = 'css/vhod.css';

include("blocks/header.php");

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");


$user_skills = $db->prepare("SELECT `skills` FROM `users` WHERE `id` = ?");
$user_skills->execute(array($_COOKIE['user']));
$user_skills = $user_skills->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["skills"])) {
    $str = preg_replace('/\s+/', '', $_POST["skills"]);
    $str = strtolower($str);

    $user = $db->prepare("UPDATE `users` SET `skills` = ? WHERE `id` = ?");
    $user->execute(array($str, $_COOKIE['user']));

    header('Location: '. 'http://kursach/profile.php?user=' . $_COOKIE['user']);
}
?>

    <main>
      <div class="container lox">
        <h2>Добавьте навыки через запятую</h2>
        <form action="" class="w-50" method="POST">
          <input type="text" value="<?php echo $user_skills['skills']; ?>" name="skills" class="form-control" placeholder="Коммуникабельность, 1С, бухгалтерский учет" />
          <input  class="btn btn-outline-dark" type="submit" value="Обновить">
        </form>
      </div>
    </main>

<?php include("blocks/footer.php") ?>