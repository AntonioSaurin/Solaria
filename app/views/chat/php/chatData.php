<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incomingMsgID = {$row['uniqueID']}
                OR outgoingMsgID = {$row['uniqueID']}) AND (outgoingMsgID = {$outgoing_id} 
                OR incomingMsgID = {$outgoing_id}) ORDER BY msgID DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="Sem mensagens";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoingMsgID'])){
            ($outgoing_id == $row2['outgoingMsgID']) ? $you = "Você: " : $you = "";
        }else{
            $you = "";
        }
        ($row['userStatus'] == "Indisponível") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['uniqueID']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="/chat/conversar?user_id='. $row['uniqueID'] .'">
                    <div class="content">
                    <img src="../app/style/img/defaultProfile.png" alt="">
                    <div class="details">
                       
                        <span>'. $row['userName'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>