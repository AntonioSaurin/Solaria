<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION['uniqueID'])){
        include_once "chatConfig.php";
        $outgoing_id = $_SESSION['uniqueID'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN userAccount ON userAccount.uniqueID = messages.outgoingMsgID
                WHERE (outgoingMsgID = {$outgoing_id} AND incomingMsgID = {$incoming_id})
                OR (outgoingMsgID = {$incoming_id} AND incomingMsgID = {$outgoing_id}) ORDER BY msgId";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoingMsgID'] === $outgoing_id){
                    $msgExplode = explode(":", $row['msgTime']);
                    //$row['msgTime']


                    $output .= '<section class="chat outgoing">
                                <section class="details">
                                    <p>'. $row['msg'] .'</p>
                                    

                                    <h1 class="msgTime">'. $msgExplode[0].':'. $msgExplode[1] .'</h1>
                                    
                                </section>
                                </section>';
                }else{
                    $msgExplode = explode(":", $row['msgTime']);
                    $output .= '<section class="chat incoming">
                                 <img src="../app/style/img/defaultProfile.png" alt="">
                                <section class="details">
                                    <p>'. $row['msg'] .'</p>
                                    <h1 class="msgTime">'. $msgExplode[0].':'. $msgExplode[1] .'</h1>
                                </section>
                                </section>';
                }
            }
        }else{
            $output .= '<section class="text">Nenhuma mensagem.</section>';
        }
        echo $output;
    }else{
        header("location: /chat/login");
    }

?>