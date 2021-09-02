<?php
while ($row = mysqli_fetch_assoc($sql)) {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                 OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                 OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);

    $you = '';
    if (mysqli_num_rows($query2) > 0) {
        $result = $row2['msg'];
        $you = ($outgoing_id == $row2['outgoing_msg_id']) ? $you = 'You: ' : $you = " ";
    } else {
        $result = 'No message available';
    }

    (strlen($result) > 20) ? $msg = substr($result, 0, 20).'...' : $msg = $result; 
    ($row['status'] == 'Offline now') ? $offline = 'offline' : $offline = '';

    $output .= '
                    <a href="talk.php?user_id='. $row['unique_id'] .'">
                        <div class="content">
                            <img src="php/images/' . $row['img'] . '" alt="" srcset="">
                            <div class="details">
                                <span class="text-dark">' . $row['fname'] . '</span>
                                <div style="color: ##333333b3 !important;">'. $you . $msg .'</div>
                            </div>
                        </div>
                        <div class="status_dot '. $offline .'">
                            <i class="fa fa-circle"></i>
                        </div>
                    </a>          
';
}       
?>
