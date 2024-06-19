<?php
session_start();
$site_title = 'Добавление опыта работы';
$css_file = 'css/vhod.css';

include("blocks/header.php");

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");
if((isset($_POST["text"])) and (isset($_POST["place"]))) {
    if(isset($_COOKIE['user'])) {
        $work = $db->prepare("INSERT INTO `work_experience_user` (`id_user`, 
                `text`, `duration_work`, `place`) VALUES (?, ?, ?, ?)");
        $work = $work->execute(array($_COOKIE['user'], $_POST['text'], 
            $_POST['duration_work'], $_POST['place']));
        
        $_SESSION['success'] = 'Успешно была добавлена информация о предыдущем опыте работы!';
        header('Location: '. 'http://kursach/profile.php?user=' . $_COOKIE['user']);
    }
    else {
        $_SESSION['error'] = 'Вы должны быть зарегестрированны!';
        header('Location: ' . "http://kursach/add_opit.php");
    }
}

?>

<style>
.ck-editor__editable[role="textbox"] {
    /* Editing area */
    min-height: 400px;
}
</style>

    <main>
      <div class="container lox">
        <style>
            .error {
                color: red;
            }
        </style>
        <?php if(isset($_SESSION['error'])) { ?>
            <p class="error"><?php echo $_SESSION['error']; ?></p>
        <?php } ?>
        <h2>Напишите свой предыдущий опыт работы</h2>
        <form action="" class="w-50" method="POST">
            <b>Название организации в которой работали</b>
            <input type="text" name="place" 
            class="form-control" placeholder="ПАО КАМАЗ" />
            <b>Сколько месяцев работали (напишите в цифрах)</h3>
            <input type="text" name="duration_work" 
            class="form-control" placeholder="34" />
            <b>Напишите чем вы занимались на предыдущем месте работы</b>
            <p>Расскажите кем работали, свои предыдущие 3 задачи</p>
            <textarea name="text" id="editor"></textarea><br>
            <input  class="btn btn-outline-dark" type="submit" value="Добавить">
        </form>
      </div>
    </main>

<?php include("blocks/footer.php"); ?>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>