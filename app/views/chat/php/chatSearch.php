<?php
    session_start();
    include_once "chatConfig.php";

    $outgoing_id = $_SESSION['uniqueID'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM userAccount WHERE NOT uniqueID = {$outgoing_id} AND (userName LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "../app/views/chat/php/chatData.php";
    }else{
        $output .= 'Nenhum usuário encontrado.';
    }
    echo $output;
?>