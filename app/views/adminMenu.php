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
    <section class="admin-container">
      <section class="admin-card">
        <img class="img_icon" src="app/style/img/imgUsers.png">
        <h2>Gerenciar Usuários</h2>
        <p class="subtitle">Adicionar cargo ou banir usuários.</p>
        <button class="usersButton"><b> Hur hur hur hur hur ></b></button>
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
  
  </section>
<section id="modalUsers" class="modal-container">
    <section class="modal1">
      <section id="modalTop"> 
        <i id="btnExitIcon"class="btnExit fa-solid fa-rectangle-xmark   fa-xl" style="color: #c7c7c7;"></i>
        <h4>teste</h4>
    </section>

    <section id="modalUsersContent">
      <section id="institutionAreaModal">
          AaAaAaaAaAaAaA
        </section>
      </section>
    <script>
        function openModalUsers(modalUsersId){
            const modalUsers =  document.getElementById(modalUsersId);
            modalUsers.classList.add('mostrar');
        }

        const btnOpen = document.querySelectorAll('.usersButton');
        btnOpen[index].addEventListener('click', ()=> openModalUsers('modalUsers'));   

        function closeModalUsers(modalUsersId){
            const modalUsers =  document.getElementById(modalUsersId);
            modalUsers.classList.remove('mostrar');
        }

        const btnClose = document.querySelectorAll('.btnExit');
        btnClose[index].addEventListener('click',()=>closeModalUsers('modalUsers'));   
       


</body>

</html>