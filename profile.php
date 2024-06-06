<?php
$site_title = 'Профиль';
$css_file = 'css/profile.css';

include("blocks/header.php");
?>

      <main class="container">
        <div class="info_djkf d-flex">
            <div class="avatar_info">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXrumPKQMsrYtosDWTVcOvkXleWBlJhdshg2k3qyomSQ&s" alt="">
            </div>
            <div class="text_info_profile">
                <p><h5>Фамилия Имя Отчество</h5></p>
                <p><b>Дата рождения: 14.04.1988</b></p>
                <p><b>Образование: </b>незаконченное высшее Казанский федеральный университет. Фундаментальная информатика и информационные технологии </p>
                <p><b>Навыки: </b><span class="badge bg-success">JS</span> <span class="badge bg-success">Html</span> 
                    <span class="badge bg-success">Css</span> <span class="badge bg-success">Python</span> 
                    <span class="badge bg-success">Django</span></p>
                <p><a class="btn btn-outline-primary me-2" href="">Резюме</a></p>
            </div>
        </div>
        <h2 style="margin-top: 10px;">Предыдущий опыт работы</h2>
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
      </main>

<?php include("blocks/footer.php") ?>