<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['id'])){
        include_once "chatConfig.php";
        $outgoing_id = $_SESSION['id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incomingMsgID, outgoingMsgID, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: /login");
    }


    
?>