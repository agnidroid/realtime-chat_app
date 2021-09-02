<?php
    /*session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
    
    if(!empty($fname) && !empty($email) && !empty($pass)){
        // email validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // email is already exists in the database
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
            if (mysqli_num_rows($sql) > 0){
                echo "$email - already exists";
            }
            else{
                if (isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ['jpeg', 'jpg', 'png'];
                    if (in_array($img_ext, $extensions) === true) {
                        $time = time();

                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                            $status = "Active now";
                          $random_id = rand(time(), 10000000);
                         
                          //$random_id=rand(100000,999999);


            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, email, password, img, status, joiningDate)
            VALUES ($random_id , '{$fname}', '{$email}',  '{$pass}', '{$new_img_name}', '{$status}', NOW() )");

                            if ($sql2) {
                                $sql3 = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '{$email}'");
                                if (mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "done";
                                    //header("Location:users.php");
                                }                               
                            }else{
                                echo 'Kuch toh gadbad hai';
                            }  
                        }
                    }
                    else{
                        echo "Please select an Image file - jpeg, png, jpg!";
                    }
                }
                else{
                    echo "Please select an image file!";
                }
              }
        }
        else{
            echo "$email - is not valid!";
        }
    }
    else{
        echo 'All inputs are required!';
    }*/
?>
<?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
if(!empty($fname) && !empty($email) && !empty($pass)){
    // email validation
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        // email is already exists in the database
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($sql) > 0){
            echo "$email - already exists";
        }
        else{
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
                $extensions = ['jpeg', 'jpg', 'png'];
                if (in_array($img_ext, $extensions) === true) {
                    $time = time();

                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                        $status = "Active now";
                      $random_id = rand(time(), 10000000);
                     
                      //$random_id=rand(100000,999999);


        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, email, pass, img, status, joiningDate)
        VALUES ($random_id , '{$fname}', '{$email}',  '{$pass}', '{$new_img_name}', '{$status}', NOW() )");

                        if ($sql2) {
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "done";
                            }                               
                        }else{
                            echo "Something went wrong!";
                        }  
                    }
                }
                else{
                    echo "Please select an Image file - jpeg, png, jpg!";
                }
            }
            else{
                echo "Please select an image file!";
            }
          }
    }
    else{
        echo "$email - is not valid!";
    }
}
else{
    echo 'All inputs are required!';
}
?>