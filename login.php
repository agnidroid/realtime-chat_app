<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header('location: users.php');
    }
?>
<style>
    .form-group{
        margin-bottom: 25px !important;
    }
</style>
<?php include_once "header_2.php"; ?>
<body>

    <main class="main container-fluid p-0 m-0">
        <section class="section login_section">
        <section class="loader-container">
            <div class="loader">
                <div></div>
            </div>
            </section>
            <div class="form-container">        
                <header class="text-center header border-bottom">
                    LOGIN FOR <span class="text-primary">justTalk</span>
                </header>        
                <form action="users.html" class="form_1" id="form_1" autocomplete="off">
                    <div class="mb-1 text-center" id="error">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email"  placeholder="john@gmail.com">
                    </div>
                    <div class="form-group position-relative">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="********" name="password">
                        <a href="javascript:" class="fa fa-eye position-absolute" id="eye"></a>
                        <div class="mt-2">
                            <a href=""><small>Forgot password?</small></a>
                        </div>
                    </div>
                    <input type="submit" id="submit_btn" class="form-control btn-dark" value="Continue to Chat">
                    <div class="text-center mt-2">
                        <label>Not&nbsp;Yet&nbsp;SignUped?&nbsp;<a href="index.php" class="text-dark">SignUp&nbsp;Now</a></label>
                    </div>                    
                </form>
            </div>
        </section>
    </main>

    <script src="javascript/passToggle.js"></script>
    <script src="javascript/login_js.js"></script>


</body>
</html>