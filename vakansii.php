<?php
session_start();

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");
$vakansii = $db->prepare("SELECT * FROM `vakansii` WHERE `title` LIKE ?");
$vakansii->execute(array("%" . $_GET['name'] . "%"));
$vakansii = $vakansii->fetchAll(PDO::FETCH_ASSOC);

$site_title = $_GET['name'];

include("blocks/header.php");
?>

<div class="container">
<?php foreach ($vakansii as $key => $vakansia) { ?>
        <div class="pred_exp">
            <div class="alert alert-primary" role="alert">
                <h3><?php echo $vakansia['title']; ?></h3>
                <h5><?php echo $vakansia['salary']; ?></h5>
                <hr>
                    <?php
                    $nameComp = $db->prepare("SELECT `name` FROM `companys` WHERE `id` = ?");
                    $nameComp->execute(array($vakansia['id_company']));
                    $nameComp = $nameComp->fetch(PDO::FETCH_ASSOC); ?>
                <p><h5>Название организации: <?php echo $nameComp['name']; ?></h5> </p>
                <p><?php echo $vakansia['description']; ?></p>
                <div>
                    <a href="info_vakansia.php?vakansia=<?php echo $vakansia['id']; ?>" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
        <br>
        <?php } ?>
</div>

<?php include("blocks/footer.php"); session_destroy(); ?>