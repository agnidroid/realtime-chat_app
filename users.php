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
        <section class="section user_section">
        <section class="loader-container d-none">
            <div class="loader">
                <div></div>
            </div> 
        </section>
        <header class="header">
                <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if (mysqli_num_rows($sql) > 0) { 
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <a href="php/images/<?php echo $row['img']; ?>" ><img src="php/images/<?php echo $row['img']; ?>" alt="" srcset=""></a>         
                    <div class="details">
                        <span><?php echo $row['fname']; ?></span>
                        <div><?php echo $row['status']; ?></div>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
            </header>           
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fa fa-search"></i></button>
            </div> 


            <!--  USERS  -->
            <div class="user_list">
                
            </div>

    </main>
     
    <script src="javascript/users_1.js"></script>
</body>
</html>