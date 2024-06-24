<?php
session_start();

$site_title = 'О нас';

include("blocks/header.php");
?>

<main class="container">
    <h1>О нас</h1>
    <p><b>Вакансии</b> - это сайт, где вы можете найти себе работу или сотрудника в вашу организацию
совершенно бесплатно</p>
    <br>
    <p>Наша почта: site_vakansii@gmail.com</p>
    <p>Наш единый номер телефона: +7 999 812-01-01</p>
    <br>
    <img src="images/logo.png" width="150px" alt="">
    <p>Использование логотипов на электронных и печатных носителях, а также на сайтах в сети Интернет третьими лицами допускается только с письменного разрешения компании.</p>
    <br>
    <p>По другим вопросам обращайтесь в раздел <a href="faqs.php">FAQs</a></p>
</main>

<?php include("blocks/footer.php"); session_destroy(); ?>