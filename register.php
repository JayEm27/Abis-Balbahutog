<?php
session_start(); 
 $page_title ="Registration Form";
 include ('includes/header.php');
 include ('includes/navbar.php');
 ?>

 <div class="py-5">
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
              <div class="alert">
                <?php
                if(isset($_SESSION['status']))
                {
                  echo"<h4>".$_SESSION['status']."</h4>";
                  unset($_SESSION['status']);
                }
                ?>
                
<style>
    body{

background-color: cadetblue;



}
</style>
                </div>
                <div class="card-header text-center">
                    <h5>Registration form</h5>
                    </div>
           <div class="card-body">
            <form action="code.php" method="POST">
                <div class="form-group mb-3">
                    <label for="">Firstname</label>
                    <input type="firstname" name="firstname" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Lastname</label>
                    <input type="lastname" name="lastname" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <button type="submit" name="register_btn" class="btn btn-primary"> Register Now</button>
                  </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
   </div>
 </div>