<?php
/*
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
    */
?>

<?php
    session_start();
    if(isset($_SESSION['unique_id'])){

    }
    else{
        header('location: login.php');
    }
?>

<?php include_once "header_1.php"; ?> 
<body>

    <main class="main container-fluid p-0 m-0">
        <section class="chat-area">
            <header class="header">
            <?php
            /*
                include_once "php/config.php";
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                */
            ?>
            <?php
                    include_once "php/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
            ?>


                <a href="users.php"><i class="fa fa-arrow-left back-icon"></i></a>
                <a href="php/images/<?php echo $row['img']; ?>" ><img src="php/images/<?php echo $row['img']; ?>" alt="" srcset=""></a>                
                <div class="details">
                    <span style="text-transform: capitalize !important;"><?php echo $row['fname']; ?></span>
                    <div><?php echo $row['status']; ?></div>
                </div> 
            </header>   
            <div class="chat-box">
                
            </div> 

            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php //echo $_GET['user_id'];
                    echo $user_id;
                ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here...">
                <button><i class="fa fa-telegram"></i></button>
            </form>
            
        </section>
        <button  class="position-absolute bg-dark text-light to_bottom fa fa-bars border-none" onclick="scrollToBottom()"></button>

    </main>
     
    <script src="javascript/chat.js"></script>
</body>
</html>