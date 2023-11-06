<!DOCTYPE html>

<html>

<head>
  <title>Solaria/Admin</title>
  <link rel="stylesheet" href="app/style/css/adminMenu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
  <?php
  use app\classes\Hour;

  include_once("header.php");
  ?>


  <section id="admin">

    <?='<h1 id="bemvenido">' . Hour::getHour() . ', Moderador</h1>'?>

    <a href="#modalUsers">
      <section class="admin-container">
        <section class="admin-card">
          <img class="img_icon" src="app/style/img/imgUsers.png">
          <h2>Gerenciar Usuários</h2>
          <p class="subtitle">Adicionar cargo ou banir usuários.</p>
          <span class="arrow"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></span>
        </section>
    </a>

    <section id="modalUsers" class="modal-container">
      <section class="modal1">
        <section id="modalTop"> 
          <i id="btnExitIncon"class="btnExit fa-solid fa-rectangle-xmark   fa-xl" style="color: #c7c7c7;"></i>
          <h1>teste<h1>
        </section>

        <section id="modalContent">
          <section id="institutionAreaModal">
            Informacoes instituicao 
        </section>
      </section>
    </section>

    <a href="#">
      <section class="admin-card" id="openModalButton">
        <img class="img_icon" src="app/style/img/imgInstitution.png">
        <h2>Gerenciar Instituições</h2>
        <p class="subtitle">Editar instituições disponiveis.</p>
        <span class="arrow"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></span>
      </section>
    </a>

    <a href="#">
      <section class="admin-card">
        <img class="img_icon" src="app/style/img/imgAprove.png">
        <h2>Aprovar Instituições</h2>
        <p class="subtitle">Aprovar ou negar a criação de instituições.</p>
        <span class="arrow"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></span>
      </section>
    </a>
  </section>
  </section>

</body>

</html>