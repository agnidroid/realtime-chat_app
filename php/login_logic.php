<?php
/*
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $status="Active Now";

    if (!empty($email) && !empty($pass)) {
        // email is already exists in the database
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$pass}'");
        if (mysqli_num_rows($sql) > 0){
            $sql1=mysqli_query($conn, "UPDATE users SET status= '{$status}'");
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "done";
        }
        else{
            echo "Email or Password is Incorrect!";
        }
    } else{
        echo 'All inputs are required!';
    }
  */   
?> 

<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($email) && !empty($pass)){
        // email is already exists in the database
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND pass = '{$pass}'");
        if (mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $status = 'Active now';
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");

           if($sql2){
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "done";
           }
        }
        else{
            echo "Email or Password is Incorrect!";
        }
    }
    else{
        echo 'All inputs are required!';
    }
?>