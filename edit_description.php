<?php
$site_title = 'Обновление описания';
$css_file = 'css/vhod.css';

include("blocks/header.php");

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");

$description = $db->prepare("SELECT `description` FROM `companys` WHERE `id` = ?");
$description->execute(array($_COOKIE['company']));
$description = $description->fetch(PDO::FETCH_ASSOC);

if(isset($_POST["description"])) {
    $user = $db->prepare("UPDATE `companys` SET `description` = ? WHERE `id` = ?");
    $user->execute(array($_POST["description"], $_COOKIE['company']));

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
        <h2>Напишите описание для страницы компании</h2>
        <form action="" class="w-50" method="POST">
          <textarea name="description" id="description"><?php echo $description['description']; ?></textarea><br>
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