<?php
session_start();
include('dbconn.php');

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $verify_query = "SELECT `verify_token`,`verify_status` From `login_registration` WHERE verify_token='$token' LIMIT 1";
    $verify_query_run = mysqli_query($conn, $verify_query);

    if(mysqli_num_rows( $verify_query_run) > 0)
    {
        $row = mysqli_fetch_array($verify_query_run);
         //echo $row["verify_token"];

        if($row['verify_status'] =="0") 
        {
            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE `login_registration` SET `verify_status`='1' WHERE verify_token='$clicked_token' LIMIT 1";
            $update_query_run = mysqli_query($conn, $update_query);

             if($update_query_run) 
             {
                $_SESSION['status'] = "Your Account has been verified Successfully.!";
                header("Location: login.php");
                exist(0);
             }
             else
             {
                $_SESSION['status'] = "Verification Failed";
                header("Location: login.php");
                exist(0);
             }
            }
             else
             {
                $_SESSION['status'] = "Email Already Verified. Please Login";
                header("Location: login.php");
                exist(0);
             }
            }
             else
             {
                $_SESSION['status'] = "This token does not Exists";
                header("Location: login.php");
             }
            }
             else
             {
                $_SESSION['status'] = "Not Allowed";
                header("Location: login.php");
             }
        
        
    

?>
  