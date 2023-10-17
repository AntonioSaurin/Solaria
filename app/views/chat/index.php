<?php 
  session_start();
  if(isset($_SESSION['uniqueID'])){
    header("location: chatUsers.php");
  }
?>

<?php include_once "chatHeader.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Nome" required>
          </div>
          <div class="field input">
            <label>Sobrenome</label>
            <input type="text" name="lname" placeholder="Sobrenome" required>
          </div>
        </div>
        <div class="field input">
          <label>Endereço de E-mail</label>
          <input type="text" name="email" placeholder="Insira seu E-mail" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Insira sua senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecione uma imagem</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Cadastrar">
        </div>
      </form>
      <div class="link">Já possui conta? <a href="chatLogin.php">Entrar</a></div>
    </section>
  </div>

  <script src="javascript/chatShowPassword.js"></script>
  <script src="javascript/chatSignup.js"></script>

</body>
</html>
