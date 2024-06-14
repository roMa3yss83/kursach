<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
"root", 
"");
$company = $db->prepare("SELECT * FROM `companys` WHERE `id` = ?");
$company->execute(array($_GET['company']));
$companyArray = $company->fetch(PDO::FETCH_ASSOC);

$site_title = $companyArray['name'];
$css_file = 'css/profile.css';

include("blocks/header.php");
?>
        <main class="container">
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
                        <a class="btn btn-success" 
                        href="add_description.php">Укажите описание вашей компании</a>
                    <?php } else  { ?>
                        <p><a class="btn btn-success" href="edit_description.php">Обновить описание</a></p>
                    <?php } ?>

                <?php } ?>
                <p>
                <?php if((isset($companyArray['description'])) 
                        and ($companyArray['description'] != '')) { ?>
                    <?php echo $companyArray['description']; ?>
                <?php } ?></p>
            </div>
        </div>
        <h2 style="margin-top: 10px;">Вакансии: </h2>
        
        <!--
        <div class="pred_exp">
            <div class="alert alert-primary" role="alert">
                <h4>Время работы: 56 месяц</h4>
                <hr>
                <p><b>Название организации: ПАО «КАМАЗ»</b></p>
                <p><b>Краткое описание работы:  </b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias at ullam eveniet tenetur id dolores magnam perspiciatis sit blanditiis adipisci vitae laborum quaerat cum, tempora maiores ipsum labore aspernatur? Nesciunt.</p>
            </div>
        </div>

        <div class="pred_exp">
            <div class="alert alert-primary" role="alert">
                <h4>Время работы: 44 месяц</h4>
                <hr>
                <p><b>Название организации: ПАО «КАМАЗ»</b></p>
                <p><b>Краткое описание работы:  </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi nostrum fugit inventore nesciunt tenetur hic facilis, quod ut? Accusantium voluptas natus quam veniam iure commodi iusto excepturi quasi quidem enim optio repellat dolorum adipisci cum nobis velit ut iste ex, quo maiores. Incidunt, sit enim ab aperiam magni deserunt at nulla quo fuga fugiat quis est nobis illo placeat rerum ducimus ad. Tenetur asperiores cumque dicta placeat aperiam recusandae magni fugiat culpa, iusto rem. Expedita illum soluta distinctio officiis ducimus praesentium, ipsam consequuntur amet voluptatibus dolorem maxime? Maxime rerum vitae a ex optio suscipit praesentium, fugit deserunt, voluptate reprehenderit magnam, voluptas iusto repudiandae earum impedit! Quam veniam reprehenderit iusto ea quis. Modi reiciendis non dolor perspiciatis maiores facere, explicabo autem!</p>
            </div>
        </div>
        <div class="pred_exp">
            <div class="alert alert-primary" role="alert">
                <h4>Время работы: 23 месяц</h4>
                <hr>
                <p><b>Название организации: ПАО «КАМАЗ»</b></p>
                <p><b>Краткое описание работы:  </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ipsum eaque! Aliquam voluptatem ut similique mollitia voluptas esse saepe blanditiis placeat corrupti perferendis aspernatur dicta tenetur consequatur quos, vel praesentium impedit, officiis eligendi est labore doloremque illo, perspiciatis soluta porro. Voluptas quaerat animi, neque doloremque mollitia esse? Ab, possimus officiis.</p>
            </div>
        </div>
-->
    </main>

<?php include("blocks/footer.php") ?>