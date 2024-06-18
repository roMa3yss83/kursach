<?php
$site_title = 'Добавление описания';
$css_file = 'css/vhod.css';

include("blocks/header.php");

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");

if((isset($_POST["description"])) and (isset($_POST["title"]))) {
    $vakansia = $db->prepare("INSERT INTO `vakansii` (`id_company`, 
        `title`, `description`, `salary`) VALUES (?, ?, ?, ?)");
    $vakansia = $vakansia->execute(array($_COOKIE['company'], $_POST['title'], 
        $_POST['description'], $_POST['salary']));

    header('Location: '. 'http://kursach/profile_company.php?company=' . $_COOKIE['company']);
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
        <form action="" class="w-50" method="POST">
            <h3>Заголовок вакансии</h3>
            <input type="text" name="title" 
            class="form-control" placeholder="Программист Python" />
            <h3>Зарплата</h3>
            <input type="text" name="salary" 
            class="form-control" placeholder="10000-25000 руб." />
            <h3>Описание для вакансии</h3>
            <textarea name="description" id="description"></textarea><br>
            <input  class="btn btn-outline-dark" type="submit" value="Добавить">
        </form>
      </div>
    </main>

<?php include("blocks/footer.php") ?>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>