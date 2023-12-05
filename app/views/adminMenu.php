<!DOCTYPE html>

<html>

<head>
  <title>Solaria/Admin</title>
  <link rel="stylesheet" href="app/style/css/adminMenu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="app/javaScript/jQuery.js"></script>
</head>

<body>
  <?php
  use app\classes\Hour;

  include_once("header.php");
  ?>


  <section id="admin">

    <?= '<h1 id="bemvenido">' . Hour::getHour() . ', Moderador</h1>' ?>

      <section class="admin-container">
      <a id="usersManage">
        <section class="admin-card">
        <img class="img_icon" src="app/style/img/imgUsers.png">
        <h2>Gerenciar Doadores</h2>
        <p class="subtitle">Editar e banir doadores.</p>
        <span class="arrow"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></span>
        </section>    
      </a>
      </section>
      
        <section class="admin-container">
          <a id="institutionManage">
          <section class="admin-card" id="openModalButton">
            <img class="img_icon" src="app/style/img/imgInstitution.png">
            <h2>Gerenciar Instituições</h2>
            <p class="subtitle">Editar instituições disponiveis.</p>
            <span class="arrow"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></span>
          </section>
        </a>
        </section>
    
        <section class="admin-container" id="modifyFooter"> 
          <a id="institutionApprove">
          <section class="admin-card">
            <img class="img_icon" src="app/style/img/imgAprove.png">
            <h2>Aprovar Instituições</h2>
            <p class="subtitle">Aprovar ou negar a criação de instituições.</p>
            <span class="arrow"><img class="arrowImage" src="app/style/img/imgArrowRight.png"></span>
          </section>      
          </a>
        </section>

    </section>
  </section>

  <!-- Usuários: -->
  <section id="modalUsers" class="modal-container">
    <section class="modal1">
      <section class="modalTop" id="topUser">
        <i class="btnExitIcon btnExit fa-solid fa-rectangle-xmark   fa-xl"></i>
        <h4>Doadores</h4>
      </section>
      <section class="modalUsersContent">
        <section class="cardUser">
          <section class="infoUser">
            <img class="imgCardUser" src="app/style/img/imgUsers.png">
            <h5 class="nameCardUser"> Nome do usuário </h5>
          </section>
          <section class="infoUser">
            <a href="#">
              <img class="imgControlUser" src="app/style/img/imgEdit.png"></a>
            <a href="#">
              <img class="imgControlUser" src="app/style/img/imgRemove.png">
            </a>
          </section>
        </section>
      </section>
    </section>
  </section>

  <!-- Instituição: -->
  <section id="modalInstitutions" class="modal-container">
    <section class="modal1">
      <section class="modalTop" id="topInstituition">
        <i class="btnExitIcon btnExit fa-solid fa-rectangle-xmark   fa-xl"></i>
        <h4>Instituições</h4>
      </section>
      <section class="modalUsersContent">
        <section class="cardUser">
          <section class="infoUser">
            <img class="imgCardUser" src="app/style/img/imgUsers.png">
            <h5 class="nameCardUser"> Nome do usuário </h5>
          </section>
          <section class="infoUser">
            <a href="#">
              <img class="imgControlUser" src="app/style/img/imgEdit.png"></a>
            <a href="#">
              <img class="imgControlUser" src="app/style/img/imgRemove.png">
            </a>
          </section>
        </section>
      </section>
    </section>
  </section>

    <!-- Aprovar Instituições: -->
    <section id="modalApprove" class="modal-container">
    <section class="modal1">
      <section class="modalTop" id="topApprove">
        <i class="btnExitIcon btnExit fa-solid fa-rectangle-xmark   fa-xl"></i>
        <h4>Aprovar Instituições</h4>
      </section>
      <section class="modalUsersContent">
        <section class="cardUser">
          <section class="infoUser">
            <img class="imgCardUser" src="app/style/img/imgUsers.png">
            <h5 class="nameCardUser"> Nome do usuário </h5>
          </section>
          <section class="infoUser">
            <a href="#">
              <img class="imgControlUser" src="app/style/img/imgEdit.png"></a>
            <a href="#">
              <img class="imgControlUser" src="app/style/img/imgRemove.png">
            </a>
          </section>
        </section>
      </section>
    </section>
  </section>

  <script>
    $(document).ready(function () {
      $('#usersManage').click(function () {
        $('#modalUsers').css('display', 'flex')
      })

      $('.btnExitIcon').click(function () {
        $('.modal-container').css('display', 'none')
      })

      $('#institutionManage').click(function () {
        $('#modalInstitutions').css('display', 'flex')
      })

      $('.btnExitIcon').click(function () {
        $('.modal-container').css('display', 'none')
      })

      $('#institutionApprove').click(function () {
        $('#modalApprove').css('display', 'flex')
      })

      $('.btnExitIcon').click(function () {
        $('.modal-container').css('display', 'none')
      })
    })
  </script>
  <footer id="footerArea">
		<?php
			include_once("footer.php");
		?>
	</footer>
</body>

</html>