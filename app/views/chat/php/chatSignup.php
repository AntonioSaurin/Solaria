<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include_once "chatConfig.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM userAccount WHERE userEmail = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - Esse e-mail já existe!";
            }else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                $ran_id = rand(time(), 100000000);
                                $status = "Disponível";
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO userAccount (ID, userName, userEmail, userPassword, userStatus)
                                VALUES ({$ran_id}, '{$fname}', '{$email}', '{$encrypt_pass}', '{$status}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM userAccount WHERE userEmail = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['id'] = $result['ID'];
                                        echo "sucess";
                                    }else{
                                        echo "Esse endereço de e-mail não existe!";
                                    }
                                }else{
                                    echo "Algo deu errado. Tente novamente mais tarde.";
                                }
                            }
                        }else{
                            echo "Envie uma foto.";
                        }
                    }else{
                        echo "Envie uma foto.";
                    }
                }
            }
        }else{
            echo "$email não é um e-mail válido!";
        }
    }else{
        echo "Preencha todos os campos!";
    }
?>