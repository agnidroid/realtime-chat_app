<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>justTalk</title>

    <!--  CSS  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="css/bootstrap.css">


    <!--  ICON  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    </style>
</head>
<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header('location: index.php');
    }
?>
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
                    VERIFY YOUR EMAIL
                </header>        
                <form action="" class="form_1" id="form_1" enctype="multipart/form-data" autocomplete="off">
                    <div class="mb-1 text-center" id="error">INVALID USERNAME
                    </div>
                    <p class="text-center m-2">
                        <small>You have got a email.Write the code here to Verify that this Email belongs to You.</small>
                    </p>
                    <div class="form-group mb-3">
                        <input type="number" id="code" class="form-control" name="code" placeholder="Enter verification code..">
                    </div>
                    <input type="submit" id="submit_btn" class="form-control btn-dark" value="Verify">           
                    
                    <div class="form-group d-flex justify-content-between align-items-center mt-3">
                        <a href="index.php" class="form-control text-center" class="changeEmai_btn">Change Email</a>
                        <a href="" class="form-control text-center class='resendCode_btn">Resend Code</a>
                    </div>
                </form>
            </div>
        </section>
    </main>    

    <script src="javascript/verifyEmail.js"></script>
</body>
</html>