<?php
session_start();
if(isset($_SESSION['authenticated']))
{
   $_SESSION['status'] = "You are already Logged In";
   header('Location: index.php');
   exit(0);
}

 $page_title ="Login Form";
 include ('includes/header.php');
 include ('includes/navbar.php');
 ?>

 <div class="py-5">
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

        <?php
             if(isset($_SESSION['status']))
             {
               ?>
               <div class="alert alert=success">
                <h5><?= $_SESSION['status']; ?></h5>
            </div>
            <?php
            unset($_SESSION['status']);
             }
        ?>

<style>
    body{

background-image: url(Capture.PNG);
background-size: cover;
color: light;



}
</style>
            <div class="card shadow">
                <div class="card-header text-center">
                    <h5>Login Form</h5>
                    </div>
           <div class="card-body">

            <form action="logincode.php" method="POST">

                <div class="form-group mb-3">
                    <label for="">Email Address</label>
                    <input type="text" name="email" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <button type="submit" name="login_now_btn" class="btn btn_primary">Login Now</button>
                  </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
   </div>
 </div>