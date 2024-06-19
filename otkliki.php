<?php
session_start();
$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
"root", 
"");
$company = $db->prepare("SELECT * FROM `vakansii` WHERE `id` = ?");
$company->execute(array($_GET['vakansia']));
$companyArray = $company->fetch(PDO::FETCH_ASSOC);

$vakansiiOtkliki = $db->prepare("SELECT * FROM `otkliki` WHERE `id_vakansia` = ?");
$vakansiiOtkliki->execute(array($_GET['vakansia']));
$vakansiiOtkliki = $vakansiiOtkliki->fetchAll(PDO::FETCH_ASSOC);

$site_title = $companyArray['name'];

include("blocks/header.php");
?>
<div class="container">
    <?php
    if ($vakansiiOtkliki != null) {
        foreach ($vakansiiOtkliki as $vakansiaOtklik) {
            $user = $db->prepare("SELECT * FROM `users` WHERE `id` = ?");
            $user->execute(array($vakansiaOtklik['id_user']));
            $user = $user->fetch(PDO::FETCH_ASSOC);
            ?>
            <p><a href="profile.php?user=<?php echo $user['id']; ?>"><?php echo $user['name'] . ' ' . $user['surname'] . ' ' . $user['patronymic'] ?></a></p>
            <?php
        }
    }
    else {
        ?><p>Еще никто не откликнулся на эту вакансию</p><?php
    }
    ?>
</div>


<?php include("blocks/footer.php"); session_destroy(); ?>