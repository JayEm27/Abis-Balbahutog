<?php
session_start();

$page_title = "Dashboard";
if(isset($_SESSION['authenticated']))

   $_SESSION['status'] = "You are already Logged In";

$page_title = "Home Page";
include('includes/header.php');
include('includes/navbar.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

        <div class="row">
            <div class="card-md-12 text-center">
            <style>
    body{

background-image: url(Capture.PNG);
background-size: cover;
color:#fff;


}
  .text{
    color:#B22222;
    text-shadow: 2px 2px 2px #DAA520;
    padding-top: 65px;
    font-family: "Courier New";
   
  }
  .text h2{
    font-weight: 1000;
  }
  .text img{
    border-radius: 50%;
    text-shadow: 2px 2px 2px #000;
  }
</style>
<div class="text">
    <img src="logo.PNG" alt="">
    <br>
<h2>OUR GROCERY STORE EMPLOYEES!</h2>

</div>
          



<?php include ('includes/footer.php'); ?>
