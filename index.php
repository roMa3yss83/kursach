<?php
session_start();

$site_title = 'Главная';
$css_file = 'css/style.css';

include("blocks/header.php");


$db = new PDO("mysql:host=localhost;port=3306;dbname=bd_vakansii", 
    "root", 
    "");
$noviVakansii = $db->query("SELECT * FROM `vakansii` LIMIT 6");
$noviVakansii = $noviVakansii->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST['nameVakansia'])) {
  header('Location: ' . 'vakansii.php?name=' . $_POST['nameVakansia']);
}

?>

<div class="container">
  <!--Сообщение о регистрации-->
  <?php if(isset($_SESSION['success'])) { ?>
  <div class="alert alert-success" role="alert">
      <?php echo $_SESSION['success']; ?>
  </div>
  <?php } ?>
</div>

    <div class="qkkd">
      <div class="container">
        <div id="main_main">
          <h1 id="zagolovok"><b>Работа найдётся для каждого</b></h1>
          <!-- <div id="pole_main"> -->
            <form id="pole_main" method="post" action="">

          
            <input
              type="text"
              class="form-control"
              name="nameVakansia"
              id="firstName"
              placeholder="Введите интересующую вас вакансию"
              value=""
            />
            <input  class="btn btn-danger" id="knopka_main" type="submit" value="Поиск">
            </form>
          <!-- </div> -->
        </div>
      </div>
    </div>

    <br />

    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img
            src="https://img.freepik.com/free-photo/man-working-carboard-factory_1303-22912.jpg?t=st=1710841037~exp=1710844637~hmac=369aacd931c5704f952f373a25b10f40e3482c0e2276e58b6541f4a4bcfadb4b&w=1380"
            alt="Bootstrap Themes"
            height="400"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
            Зарегестрируйтесь, как компания!
          </h1>
          <p class="lead">
            Если вы ищите сотрудников, то можете зарегестрировать 
              аккаунт своей компании написав на почту 
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a class="btn btn-outline-secondary btn-lg px-4" 
            href="info_reg_kompany.php">Инструкция для регистрации своей компании</a>
          </div>
        </div>
      </div>
    </div>

    <br />

    <div class="container">
      <h2>Новые вакансии на сайте</h2>

      <style>
        .vakansiaNovi {
          margin-bottom: 15px;
        }
      </style>
      <div class="row">
        <?php foreach ($noviVakansii as $noviVakansia) { ?>
          <?php
          $nameComp = $db->prepare("SELECT `name` FROM `companys` WHERE `id` = ?");
           $nameComp->execute(array($noviVakansia['id_company']));
           $nameComp = $nameComp->fetch(PDO::FETCH_ASSOC);
          ?>
        <div class="col-sm-6 vakansiaNovi">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $noviVakansia['title']; ?>  <?php echo $noviVakansia['salary']; ?>
              </h5>
              <p class="card-text">
                <?php
                   echo $nameComp['name'];
                ?>
              </p>
              <a href="info_vakansia.php?vakansia=<?php echo $noviVakansia['id']; ?>" class="btn btn-primary">Подробнее</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>



    </div>

<?php
  include("blocks/footer.php");

  session_destroy();
?>
