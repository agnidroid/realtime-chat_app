<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header('location: users.php');
    }
?>

<?php include_once "header_2.php"; ?>
<style>
    .form-group{
        margin-bottom: 25px !important;
    }
</style>
<body>
    
    <main class="main container-fluid p-0 m-0">
        <section class="loader-container">
            <div class="loader">
                <div></div>
            </div>
        </section>
        <section class="section signUp_section">
            <div class="form-container">        
                <header class="text-center header border-bottom">
                    SIGNUP FOR <span class="text-primary">justTalk</span>
                </header>        
                <form action="" class="form_1" id="form_1" enctype="multipart/form-data" autocomplete="off">
                    <div class="mb-1 text-center" id="error"></div>
                    <div class="form-group">
                        <label for="fname">FullName</label>
                        <input type="text" id="fname" class="form-control" name="fname" placeholder="johnDoe">
                    </div>
                    <div class="form-group"> 
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email"  placeholder="john@gmail.com">
                    </div>
                    <div class="form-group position-relative">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="********" >
                        <a href="javascript:" class="fa fa-eye position-absolute bg-dark" id="eye"></a>
                    </div>
                    <div class="form-group"> 
                        <label for="remember_me">Select Image</label>
                        <input type="file" name="image" id="img" class="d-block" >
                    </div>
                    <input type="submit" id="submit_btn" class="form-control btn-dark" value="Continue to Chat">
                    <div class="text-center mt-2">
                        <label>Already&nbsp;have&nbsp;account?&nbsp;<a href="login.php" class="text-dark">Login&nbsp;Now</a></label>
                    </div>                    
                </form>
            </div>
        </section>
    </main>


    <script src="javascript/passToggle.js"></script>
    <script src="javascript/signUp.js"></script>

