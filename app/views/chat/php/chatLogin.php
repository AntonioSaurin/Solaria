<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    include_once "chatConfig.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM userAccount WHERE userEmail = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['userPassword'];
            if($user_pass === $enc_pass){
                $status = "Disponível";
                $sql2 = mysqli_query($conn, "UPDATE userAccount SET userStatus = '{$status}' WHERE uniqueID = {$row['uniqueID']}");
                if($sql2){
                    $_SESSION['uniqueID'] = $row['uniqueID'];
                    echo "success";
                }else{
                    echo "Algo de errado. Tente novamente mais tarde.";
                }
            }else{
                echo "E-mail ou senha incorretos.";
            }
        }else{
            echo "$email - Esse e-mail não existe.";
        }
    }else{
        echo "Preencha todos os campos.";
    }
?>