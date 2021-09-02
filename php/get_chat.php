<?php
/*
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once 'config.php';
    $x=$_SESSION['unique_id'];
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $output = "";

    //    LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id

    

    $sql = "SELECT * FROM messages WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
    OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            if($row['outgoing_msg_id'] === $outgoing_id){
              //  $x=$row['img'];
                $output .= '
                    <div class="chat outgoing">
                        <div class="details">
                            <p>'. $row['msg'] .'</p>
                        </div>
                    </div>
                ';
            }else{
                $output .= '
                    <div class="chat incoming">
                        <img src="c7.jpg"  alt="">
                        <div class="details">
                            <p>'. $row['msg'] .'</p>
                        </div>
                    </div>
                ';
            }
        }
        echo $output;
    }
}
else{
    header('../login.php');
}*/
?>

<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once 'config.php';
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $output = "";

    $sql = "SELECT * FROM messages 
        LEFT JOIN users ON users.unique_id = messages.incoming_msg_id
        WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
        OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";

    $query = mysqli_query($conn, $sql);



    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {

            // $incoming_img = "";
            // if ($row['outgoing_msg_id'] === $outgoing_id) {
            //     $incoming_img .= $row['img'];
            // }

            if ($row['outgoing_msg_id'] === $outgoing_id) {
                //  $x=$row['img'];
                // $row['img']
                $output .= '
                        <div class="chat outgoing">
                            <div class="details">
                                <p>' . $row['msg'] . '</p>
                                <small>' . $row['sendTime'] . '</small>
                            </div>
                        </div>';
            } else {
                $output .= '
                        <div class="chat incoming">
                            
                            <div class="details">
                                <p>' . $row['msg'] . '</p>
                                <small>' .  $row['sendTime']  . '</small>
                            </div>
                        </div>
                    ';
            }
            // <img src="php/images/' . $row['img'] . '"  alt="">
        }
        echo $output;
    }
} else {
    header('../login.php');
}
?>