<?php
    session_start();
    include_once "chatConfig.php";
    $outgoing_id = $_SESSION['uniqueID'];
    $sql = "SELECT * FROM userAccount WHERE NOT uniqueID = {$outgoing_id} ORDER BY ID DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "Nenhum usuário disponível";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "chatData.php";
    }
    echo $output;
?>