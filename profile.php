<?php
$site_title = 'Профиль';
$css_file = 'css/profile.css';

include("blocks/header.php");

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");
$user = $db->prepare("SELECT * FROM `users` WHERE `id` = ?");
$user->execute(array($_GET['user']));
$userArray = $user->fetch(PDO::FETCH_ASSOC);

$month_list = array(
	1  => 'января',
	2  => 'февраля',
	3  => 'марта',
	4  => 'апреля',
	5  => 'мая', 
	6  => 'июня',
	7  => 'июля',
	8  => 'августа',
	9  => 'сентября',
	10 => 'октября',
	11 => 'ноября',
	12 => 'декабря'
);// Предположим, что $row['date'] содержит дату из вашей базы данных
$originalDate = $userArray['birthdate'];

// Преобразование даты в формат времени Unix
$timestamp = strtotime($originalDate);

// Получение номера месяца
$monthNumber = date('n', $timestamp);
?>

      <main class="container">
        <div class="info_djkf d-flex">
            <div class="avatar_info">
                <img width="250px" src="avatars/<?php echo $userArray['avatar']; ?>">
            </div>
            <div class="text_info_profile">
                <p><h5><?php echo $userArray['surname'] . ' ' . $userArray['name'] . ' ' . $userArray['patronymic']; ?></h5></p>
                <p><b>Дата рождения:
                    <?php echo date('d', $timestamp) . 
                    ' ' . $month_list[date('n', $timestamp)] . 
                    ' ' . date('Y', $timestamp); ?></b></p>


                <!-- Образование соискателя -->
                <p>
                <?php if ($_GET['user'] == $_COOKIE['user']) { ?>
                    <?php if((is_null($userArray['education'])) or ($userArray['education'] == '')) { ?>
                        <a class="btn btn-success" href="add_education.php">Укажите образование</a>
                    <?php } else  { ?>
                        <a class="btn btn-success" href="edit_education.php">Обновить сведения об образовании</a>
                    <?php } ?>
                <?php } ?>

                <?php if((isset($userArray['education'])) and ($userArray['education'] != '')) { ?>
                <b>Образование:</b> <?php echo $userArray['education']; ?></p>
                <?php } ?>

                <!-- Навыки соискателя -->
                <p>
                <?php if ($_GET['user'] == $_COOKIE['user']) { ?>
                    <?php if((is_null($userArray['skills'])) or ($userArray['skills'] == '')) { ?>
                        <a class="btn btn-success" href="add_skills.php">Укажите свои навыки</a>
                    <?php } else { ?>
                        <a class="btn btn-success" href="edit_skills.php">Редактировать навыки</a>
                    <?php } ?>
                <?php } ?>
                <?php if((isset($userArray['skills'])) and ($userArray['skills'] != '')) { ?>
                <b>Навыки: </b>
                <?php 
                foreach (explode(',', $userArray['skills']) as $skill) {
                    ?>
                    <span class="badge bg-success"><?php echo $skill; ?></span>
                    <?php
                } }
                ?>
                </p>
                <!-- Конец блоку "Навыки соискателя" -->

                <p><a class="btn btn-outline-primary me-2" href="">Резюме</a></p>
            </div>
        </div>
        <h2 style="margin-top: 10px;">Предыдущий опыт работы: </h2>
        
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