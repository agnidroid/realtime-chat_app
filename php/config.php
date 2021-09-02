<?php
    $conn = mysqli_connect("localhost", "root", "", "justTalk");

    if (!$conn) {
        echo 'database not connected' . mysqli_connect_error();
    }


    // $arr = array("prakash" => "prakash@gmail.com", "vikash" => "vikash@gmail.com", "Subhash" => "subhash@gmail.com");
    
    // for ($i=0; $i < 10; $i++) { 
    //     echo $i;
    // }

    // foreach ($arr as $i => $email) {
    //     # code...
    //     echo $i." : ".$email . "<br>";
    // }

   // echo date("d-m-y");


   
?>




