<?php
include ('dbconn.php');

if (isset($_POST["submit"])) {
   $employees = $_POST['employees'];
   $duties = $_POST['duties'];
   $salary = $_POST['salary'];
   $in = $_POST['in'];
   $out = $_POST['out'];
  

   // $sql = "INSERT INTO `employee`(`employees`, `duties`, `salary`, `in`, `out`) VALUES ('$employees','$duties','$salary')";

   $sql = "INSERT INTO `employee`(`id`,`employees`, `duties`, `salary`, `in`, `out`) VALUES (NULL,'$employees', '$duties','$salary', '$in', '$out')";
   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: dashboard.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
</style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <title>EMPLOYEES</title>
</head>

<body style= "background-color: cadetblue";>
<nav class="navbar navbar-light justify-content-center fs-2 mb-3" style="background-color:">
  </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add Another employee</h3>
         
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Employees</label>
                  <input type="text" class="form-control" name="employees" placeholder="Employees">
               </div>

               <div class="col">
                  <label class="form-label">Duties</label>
                  <input type="text" class="form-control" name="duties" placeholder="Duties">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Salary:</label>
               <input type="salary" class="form-control" name="salary" placeholder="Salary">
            </div>

            <div class="mb-3">
               <label class="form-label">In:</label>
               <input type="in" class="form-control" name="in" placeholder="In">
            </div>

            <div class="mb-3">
               <label class="form-label">Out:</label>
               <input type="out" class="form-control" name="out" placeholder="Out">
            </div>

           
            <div>
               <button type="submit" class="btn btn-success" name="submit">YES</button>
               <a href="index.php" class="btn btn-danger">NO</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

