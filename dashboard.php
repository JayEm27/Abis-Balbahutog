<?php
include('dbconn.php');
include('authentication.php');

$page_title = "Dashboard";
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
               </div>
            </div>
        </div>
    </div>  

    <!DOCTYPE html>
<html lang="en">

  <head>
  <title>Grocery Store Employees</title>
<style>
    body{    
      
      background-color: grey;
}
.table ,tr,td{
  color:#F0E68C;
  font-weight:100;
  font-family: "Georgia";
  background-color:;
}
  h3 {
    text-align: center;
    font-weight:300;
  font-family: "Georgia";
    
  }
</style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- data tables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background-color: cadetblue";>
   <h3>Grocery Store Employees</h3> 
 

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
   
    <a href="add-new.php" class="btn btn-dark mb-3">Add Employee</a>
       
    <table id="table" class=" table table-hover text-center">
      <thead class="table-dark">

        <tr>
          <th scope="col">Total of employees</th>
          <th scope="col">Employee's Job</th>
          <th scope="col">Primary duties</th>
          <th scope="col">Salary</th>
          <th scope="col">In</th>
          <th scope="col">Out</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `employee`";
        $employee = $conn->query($sql) or die ($conn->error);
        $row = $employee->fetch_assoc();
        ?>

         <?php do{ ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["employees"] ?></td>
            <td><?php echo $row["duties"] ?></td>
            <td><?php echo $row["salary"] ?></td>
            <td><?php echo $row["in"] ?></td>
            <td><?php echo $row["out"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            
            </td>
          </tr>
        <?php }while($row = $employee->fetch_assoc()) ?>
        
      </tbody>
    </table>
  </div>
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

  <!-- data table <! Bootstrap -->
   
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready( function () {
    $('#table').DataTable();
  });
</script>

</body>

</html>
    
</body>
</html>



    <?php include('includes/footer.php'); ?>