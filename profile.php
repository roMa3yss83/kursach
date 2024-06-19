<?php
session_start();
$site_title = 'Профиль';
$css_file = 'css/profile.css';

include("blocks/header.php");

$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");
$user = $db->prepare("SELECT * FROM `users` WHERE `id` = ?");
$user->execute(array($_GET['user']));
$userArray = $user->fetch(PDO::FETCH_ASSOC);

$oldWorks = $db->prepare("SELECT * FROM `work_experience_user` WHERE `id_user` = ?");
$oldWorks->execute(array($_GET['user']));
$oldWorks = $oldWorks->fetchAll(PDO::FETCH_ASSOC);

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
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['success']; ?>
            </div>
        <?php } ?>
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
                <p><b>Почта для свзяи:</b> <?php echo $userArray['email']; ?></p>
            </div>
        </div>

        <h2 style="margin-top: 10px;">Предыдущий опыт работы: </h2>
        <?php if ($_COOKIE['user'] == $_GET['user']) { ?>
        <a class="btn btn-outline-dark" href="add_opit.php">Добавить информацию о предыдущем опыте работы +</a>
        <?php } ?>
        <br><br>
        <?php foreach ($oldWorks as $key => $oldWork) { ?>
            
            <div class="pred_exp">
            <div class="alert alert-primary" role="alert">
                <h4>Время работы: <?php echo $oldWork['duration_work']; ?> месяц</h4>
                <hr>
                <p><b>Название организации: <?php echo $oldWork['place']; ?> </b></p>
                <p><b>Краткое описание работы: </b><?php echo $oldWork['text']; ?></p>

                <?php if($_COOKIE['user'] == $_GET['user']) { ?>
                    <div>
                        <style>
                            .knopki-work {
                                margin-right: 8px;
                            }
                        </style>
                        <a class="knopki-work btn btn-secondary" href="edit_opit.php?opit=<?php echo 
                        $oldWork['id']; ?>">Редактировать</a>
                        <a class="knopki-work btn btn-danger" href="delit_opit.php?opit=<?php echo 
                        $oldWork['id']; ?>">Удалить</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
      </main>

<?php include("blocks/footer.php"); session_destroy(); ?>