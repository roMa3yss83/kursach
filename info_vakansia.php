<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
"root", 
"");

$selectVakansia = $db->prepare("SELECT * FROM `vakansii` WHERE `id` = ?");
$selectVakansia->execute(array($_GET['vakansia']));
$selectVakansia = $selectVakansia->fetch(PDO::FETCH_ASSOC);

$nameComp = $db->prepare("SELECT * FROM `companys` WHERE `id` = ?");
$nameComp->execute(array($selectVakansia['id_company']));
$nameComp = $nameComp->fetch(PDO::FETCH_ASSOC);

session_start();

$site_title = $selectVakansia['title'];

include("blocks/header.php")
?>
<style>
    .error_message {
        color: red;
    }
</style>
<div class="container">
    <?php if(isset($_SESSION['success'])) { ?>
    <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php } ?>
    <h2><?php echo $selectVakansia['title']; ?></h2>
    <p><b>Зарплата: <?php echo $selectVakansia['salary']; ?></b></p>
    <p>Работодатель: <a href="profile_company.php?company=<?php echo $nameComp['id']; ?>"><?php echo $nameComp['name']; ?></a></p>
    <p>
        <?php echo $selectVakansia['description']; ?>
    </p>
    <?php if (isset($_COOKIE['user'])) { ?>
        <div>
            <a class="btn btn-outline-success" href="otklik_na_vakansiy.php?vakansia=<?php echo $_GET['vakansia']; ?>">Откликнуться</a> <a class="btn btn-outline-danger" href="">Пожаловаться</a>
        </div>
    <?php } else { ?>
        <p class="error_message">Зарегестрируйтесь или войдите в аккаунт, чтобы откликнуться или пожаловаться на эту вакансию!</p>
    <?php } ?>
</div>

<?php include("blocks/footer.php"); session_destroy(); ?>