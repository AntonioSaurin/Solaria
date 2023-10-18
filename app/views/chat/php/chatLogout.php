<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['uniqueID'])){
        include_once "chatConfig.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $timezone = "America/Sao_Paulo";
            date_default_timezone_set($timezone);
            $date = new \DateTime();
            
            $dateGet = date_format($date, 'H:i');


            $status = "Visto por último: ".$dateGet.".";
            $sql = mysqli_query($conn, "UPDATE userAccount SET userStatus = '{$status}' WHERE uniqueID={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: /chat/login");
            }
        }else{
            header("location: /chat.php");
        }
    }else{  
        header("location: /chat/login.php");
    }
?>