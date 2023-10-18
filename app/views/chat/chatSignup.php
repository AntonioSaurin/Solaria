<?php 
  //session_start();
  if(isset($_SESSION['uniqueID'])){
    header("location: chatUsers.php");
  }
?>

<?php include_once "chatHeader.php"; ?>
<body>
  <section class="wrapper">
    <section class="form signup">
      <header>Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <section class="error-text"></section>
        <section class="name-details">
          <section class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Nome" required>
          </section>
          <section class="field input">
            <label>Sobrenome</label>
            <input type="text" name="lname" placeholder="Sobrenome" required>
          </section>
        </section>
        <section class="field input">
          <label>Endereço de E-mail</label>
          <input type="text" name="email" placeholder="Insira seu E-mail" required>
        </section>
        <section class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Insira sua senha" required>
          <i class="fas fa-eye"></i>
        </section>
        <section class="field image">
          <label>Selecione uma imagem</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </section>
        <section class="field button">
          <input type="submit" name="submit" value="Cadastrar">
        </section>
      </form>
      <section class="link">Já possui conta? <a href="/chat/login">Entrar</a></section>
    </section>
  </section>

  <script src="../app/javaScript/chatShowPassword.js"></script>
  <script src="../app/javaScript/chatSignup.js"></script>

</body>
</html>
