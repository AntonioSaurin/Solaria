<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include_once "chatConfig.php";

    $outgoing_id = $_SESSION['id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM userAccount WHERE NOT ID = {$outgoing_id} AND (userName LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once ("./app/views/chat/php/chatData.php");
    }else{
        $output .= 'Nenhum usuário encontrado.';
    }
    echo $output;
?>