<?php 
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  
  include_once "php/chatConfig.php";
  if(!isset($_SESSION['id'])){
    header("location: /login");
  }
?>
<?php include_once "chatHeader.php"; ?>
<body>
<header>
   <?php
			include('app/views/header.php');
		?>
		
	</header>
  
  <div class="wrapper">
    <section class="users">
      <header>
      
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM userAccount WHERE ID = {$_SESSION['id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
           <!-- <img src="php/images/<php /*echo $row['img']*/ ?>" alt=""> -->
          <img src="../app/style/img/defaultProfile.png" alt="">
          <div class="details">
            <span><?php echo $row['userName']; ?></span>
            <p><?php echo $row['userStatus']; ?></p>
          </div>
        </div>
        <a href="../app/views/chat/php/chatLogout.php?logout_id=<?php echo $row['ID']; ?>" class="logout">Sair</a>
      </header>
      <div class="search">
        <span class="text">Selecione um usuário</span>
        <input type="text" placeholder="Digite um nome.">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="../app/javaScript/chatUsers.js"></script>

</body>
</html>
