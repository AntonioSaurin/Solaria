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
      use app\classes\Hour;
		?>
		
	</header>
  
  <div class="wrapper" >
    <section class="users">
      <header>
      
        <div class="content">
          <?php 

            // if(!isset($_SESSION['institution'])) {
            //   ECHO("USUARIO");
            // } else if(isset($_SESSION['institution'])) {
            //   ECHO("INSTITUIÇÃO");
            // }
            $sql = mysqli_query($conn, "SELECT * FROM userAccount WHERE ID = {$_SESSION['id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
           <!-- <img src="php/images/<php /*echo $row['img']*/ ?>" alt=""> -->
          <img src="../app/style/img/defaultProfile.png" alt="">
          <div class="details">
            
            <span><?php echo Hour::getHour().', '; echo $row['userName']; ?></span>
            <p><?php echo "Online"; ?></p>
          </div>
        </div>
        <a href="/" class="logout">Voltar</a>
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
