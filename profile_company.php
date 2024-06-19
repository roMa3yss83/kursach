<?php
session_start();
$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
"root", 
"");
$company = $db->prepare("SELECT * FROM `companys` WHERE `id` = ?");
$company->execute(array($_GET['company']));
$companyArray = $company->fetch(PDO::FETCH_ASSOC);

$vakansiiKompanii = $db->prepare("SELECT * FROM `vakansii` WHERE `id_company` = ?");
$vakansiiKompanii->execute(array($_GET['company']));
$vakansiiKompanii = $vakansiiKompanii->fetchAll(PDO::FETCH_ASSOC);

$site_title = $companyArray['name'];
$css_file = 'css/profile.css';

include("blocks/header.php");
?>
        <main class="container">
        <?php if(isset($_SESSION['delit'])) { ?>
        <div class="alert alert-success">
            <?php echo $_SESSION['delit'];  ?>
        </div>
        <?php } ?>
        <div class="info_djkf d-flex">
            <div class="avatar_info">
                <img width="250px" src="avatars/<?php echo $companyArray['logo']; ?>">
            </div>
            <div class="text_info_profile">
            <p><h5><?php echo $companyArray['name'] ?></h5></p>
                <p><b>Сфера деятельности: 
                    <?php echo $companyArray['branch'] ?></b></p>


                <!-- Описание компании -->
                <p>
                <?php if ($_GET['company'] == $_COOKIE['company']) { ?>
                    <?php if((is_null($companyArray['description'])) 
                    or ($companyArray['description'] == '')) { ?>
                        <a class="btn btn-outline-success" 
                        href="add_description.php">Укажите описание вашей компании</a>
                    <?php } else  { ?>
                        <p><a class="btn btn-outline-success" href="edit_description.php">Обновить описание</a></p>
                    <?php } ?>

                <?php } ?>
                <p>
                <?php if((isset($companyArray['description'])) 
                        and ($companyArray['description'] != '')) { ?>
                    <?php echo $companyArray['description']; ?>
                <?php } ?></p>
            </div>
        </div>

        <!-- СПИСОК ВАКАНСИЙ -->
        <h2 style="margin-top: 10px;">Вакансии: </h2>
        <?php if($_COOKIE['company'] == $_GET['company']) { ?>
            <a class="btn btn-outline-success" href="add_vakansia.php">Добавить вакансию</a>
        <?php } ?>
        <br>
        <?php foreach ($vakansiiKompanii as $key => $vakansiaKompanii) { ?>
        <div class="pred_exp">
            <div class="alert alert-primary" role="alert">
                <h3><?php echo $vakansiaKompanii['title']; ?></h3>
                <h5><?php echo $vakansiaKompanii['salary']; ?></h5>
                <hr>
                    <?php
                    $nameComp = $db->prepare("SELECT `name` FROM `companys` WHERE `id` = ?");
                    $nameComp->execute(array($vakansiaKompanii['id_company']));
                    $nameComp = $nameComp->fetch(PDO::FETCH_ASSOC); ?>
                <p><h5>Название организации: <?php echo $nameComp['name']; ?></h5> </p>
                <p><?php echo $vakansiaKompanii['description']; ?></p>

                <?php if($_COOKIE['company'] == $vakansiaKompanii['id_company']) { ?>
                    <div>
                        <style>
                            .knopki-vakansij {
                                margin-right: 8px;
                            }
                        </style>
                        <a class="knopki-vakansij btn btn-secondary" href="edit_vakansia.php?vakansia=<?php echo 
                        $vakansiaKompanii['id']; ?>">Редактировать</a>
                        <a class="knopki-vakansij btn btn-danger" href="delit_vakansia.php?vakansia=<?php echo 
                        $vakansiaKompanii['id']; ?>">Удалить</a>
                        <a class="knopki-vakansij btn btn-primary" href="otkliki.php?vakansia=<?php 
                        echo $vakansiaKompanii['id']; ?>">Смотреть отклики</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </main>

<?php include("blocks/footer.php"); session_destroy(); ?>