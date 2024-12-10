<?php
session_start();
include('dbconn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


function sendemail_verify($firstname,$email, $verify_token)

{
    //Create an instance; passing 'true' enables exceptions
    $mail = new PHPMailer(true);  
    
    //Server settings
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'membrillosbernadith@gmail.com';                     
    $mail->Password   = 'qrgfdpyxauzyrryf'; 

    $mail->SMTPSecure = "ssl";            
    $mail->Port       = 465; 

    //Recipients
    $mail->setFrom('membrillosbernadith@gmail.com', 'core');
    $mail->addAddress($email);
    
    //content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Email verification from web core';


    $email_template ="
    <h2>You have registered with core</h2>
    <h5>Verify your email address to login with the given link</h5>
    <br></br>
    <a href='http://localhost/core/verify-email.php?token=$verify_token'>Click Me</a>
    ";
    $mail->Body = $email_template;
    $mail->send();
    //echo 'Message has been sent';
  
}                                 


if(isset($_POST['register_btn']))

{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_token = md5(rand());
}
   
    $check_email_query ="SELECT email From login_registration WHERE email ='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['status'] = "Email ID is already Exists";
        header("Location: register.php");
    }else
    {

     $query = "INSERT INTO  login_registration (firstname, lastname, email, password, verify_token)
      VALUES ('$firstname', '$lastname', '$email', '$password', '$verify_token')";
     $query_run = mysqli_query($conn,$query);

    if($check_email_query_run)
    
{
    sendemail_verify("$firstname","$email","$verify_token");

    $_SESSION['status']= "Registration Successfully. | Please verify your Email Address.";
    header("Location: register.php");
}
else

{
 
  $_SESSION['status']= "Registration Failed";
  header("Location: register.php");
}

}


?>

