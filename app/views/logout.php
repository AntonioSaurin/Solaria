<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['id'])){

        
        $credentials = require $_SERVER['DOCUMENT_ROOT'].'/app/config/database.php';

        $conn = mysqli_connect($credentials['host'], $credentials['username'], $credentials['password'], $credentials['dbname']);


        $logout_id = $_SESSION['id'];
        $timezone = "America/Sao_Paulo";
        date_default_timezone_set($timezone);
        $date = new \DateTime();
        
        $dateGet = date_format($date, 'H:i');

        $status = "Visto por último: ".$dateGet.".";
        mysqli_query($conn, "UPDATE userAccount SET userStatus = '{$status}' WHERE ID={$logout_id}");
        
            
        session_unset();
        session_destroy();
        header("location: /login");
        

            
    }else{  
        header("location: /login");
    }



            

    ?>