<?php 
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  
  if(isset($_SESSION['uniqueID'])){
    header("location: chatUsers.php");
  }
?>

<?php include_once "chatHeader.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Endereço de E-mail</label>
          <input type="text" name="email" placeholder="Insira seu E-mail" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Insira sua senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Entrar">
        </div>
      </form>
      <div class="link">Não possui conta? <a href="/chat/registrar">Cadastrar</a></div>
    </section>
  </div>
  
  <script src="../app/javaScript/chatShowPassword.js"></script>
  <script src="../app/javaScript/chatLogin.js"></script>

</body>
</html>
