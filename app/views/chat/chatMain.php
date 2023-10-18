<?php 
  //session_start();
  include_once "php/chatConfig.php";
  if(!isset($_SESSION['uniqueID'])){
    header("location: chatLogin.php");
  }
?>
<?php include_once "chatHeader.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM userAccount WHERE uniqueID = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: chatUsers.php");
          }
        ?>
        <a href="chatUsers.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <!-- <img src="php/images/<php /*echo $row['img'];*/ ?>" alt=""> -->
        <img src="../app/style/img/defaultProfile.png" alt="">
        <div class="details">
          <span><?php echo $row['userName'] ?></span>
          <p><?php echo $row['userStatus']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id;  ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Digite uma mensagem..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="../app/javaScript/chatMain.js"></script>

</body>
</html>
