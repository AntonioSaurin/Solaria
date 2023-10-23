<!DOCTYPE html>

<html>
<head>
  <title>Solaria/Admin</title>
  <link rel="stylesheet" href="app/style/css/adminMenu.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
</head>
<body>
  <?php
    include_once("header.php");
  ?>


  <section id="admin">

  <?php 

    date_default_timezone_set('America/Sao_Paulo');

    //Formato de 24 horas
      $hourGet = date('G');
      $msgDay = "";

      if ( $hourGet >= 5 && $hourGet <= 11 ) {
        $msgDay = "Bom-dia";
          
      } else if ( $hourGet >= 12 && $hourGet <= 18 ) {
        $msgDay = "Boa-tarde";
      } else if ( $hourGet >= 19 || $hourGet <= 4 ) {
        $msgDay = "Boa-noite";
      }

      echo('<h1 id="bemvenido">'.$msgDay.', Moderador</h1>'); 
  ?>

  <a href="#">
    <section class="admin-container">
        <section class="admin-card">
        <img class="img_icon" src="app/style/img/imgUsers.png">
        <h2>Gerenciar Usuários</h2>
        <p class="subtitle">Adicionar cargo ou banir usuários.</p>
        <span class="arrow">&#x2197;</span>
    </section>
  </a>
  
  <a href="#">
    <section class="admin-card" id="openModalButton">
      <img class="img_icon" src="app/style/img/imgInstitution.png">
      <h2>Gerenciar Instituições</h2>
      <p class="subtitle">Editar instituições disponiveis.</p>
      <span class="arrow">&#x2197;</span>
    </section>
  </a>

  <a href="#">
    <section class="admin-card">
      <img class="img_icon" src="app/style/img/imgAprove.png">
      <h2>Aprovar Instituições</h2>
      <p class="subtitle">Aprovar ou negar a criação de instituições.</p>
      <span class="arrow">&#x2197;</span>
    </section>
  </a>
  </section>
  </section>
  
</body>
</html>
