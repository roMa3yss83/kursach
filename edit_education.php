<?php
$site_title = 'Образование';
$css_file = 'css/vhod.css';

include("blocks/header.php");

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");

$user_education = $db->prepare("SELECT `education` FROM `users` WHERE `id` = ?");
$user_education->execute(array($_COOKIE['user']));
$user_education = $user_education->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["education"])) {

    $user = $db->prepare("UPDATE `users` SET `education` = ? WHERE `id` = ?");
    $user->execute(array($_POST["education"], $_COOKIE['user']));

    header('Location: '. 'http://kursach/profile.php?user=' . $_COOKIE['user']);
}
?>

    <main>
      <div class="container lox">
        <h2>Добавьте навыки через запятую</h2>
        <form action="" class="w-50" method="POST">
          <input type="text" value="<?php echo $user_education['education']; ?>" name="education" class="form-control" placeholder="МОСКОВСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ ИМЕНИ М.В.ЛОМОНОСОВА Культурология" />
          <input  class="btn btn-outline-dark" type="submit" value="Добавить">
        </form>
      </div>
    </main>

<?php include("blocks/footer.php") ?>