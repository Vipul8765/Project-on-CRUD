<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Employee</title>
  </head>
  <body>
    <h1 class="text-center">Edit Employee Details</h1>
    <?php
//edit employee
$conn=mysqli_connect('localhost','root','','project1');
if(isset($_GET['edit'])){
    $edit_id=$_GET['edit'];
    $select = "SELECT * FROM employee WHERE emp_id='$edit_id'";
    $run = mysqli_query($conn, $select);
$row_user = mysqli_fetch_array($run);
$emp_id = $row_user['emp_id'];
$emp_name = $row_user['emp_name'];
$emp_email = $row_user['emp_email'];
$emp_password = $row_user['emp_password'];
$emp_mobile = $row_user['emp_mobile'];
$emp_DepDetails = $row_user['emp_DepDetails'];
}


?>
    <div class="container mt-5">
    <form action="" method="post">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Employee ID</label>
    <input type="text" class="form-control" value="<?php echo $emp_id;?>" placeholder="Enter Your Employee ID" name="emp_id">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" value="<?php echo $emp_name;?>" placeholder="Enter Your name" name="emp_name">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" value="<?php echo $emp_email; ?>" placeholder="Enter Your Email" name="emp_email">
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" value="<?php echo $emp_password;?>"placeholder="Enter Your Password" name="emp_password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile No.</label>
    <input type="text" class="form-control"value="<?php echo $emp_mobile; ?>" placeholder="Enter Your Mobile No." name="emp_mobile">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Department</label>
    <input type="text" class="form-control"value="<?php echo $emp_DepDetails; ?>" placeholder="Enter Your Department" name="emp_DepDetails">
  </div>

  <button type="submit" class="btn btn-primary w-100"  name="insert-btn">Submit</button>
  
</form>
<?php
$conn=mysqli_connect('localhost','root','','project1');
//if(mysqli_connect_errno()){
 //   echo "connection failed";
//}
//else{
//    echo " connection Successful";
//}
if(isset($_POST['insert-btn'])){
$nemp_id=$_POST['emp_id'];
$nemp_name=$_POST['emp_name'];
$nemp_email=$_POST['emp_email'];
$nemp_password=$_POST['emp_password'];
$nemp_mobile=$_POST['emp_mobile'];
$nemp_DepDetails=$_POST['emp_DepDetails'];

$update = "UPDATE employee SET emp_id='$nemp_id',emp_name='$nemp_name',emp_email='$nemp_email',emp_password='
$nemp_password',emp_mobile='$nemp_mobile',emp_DepDetails='$nemp_DepDetails' WHERE emp_id='$edit_id'";
$run_update=mysqli_query($conn,$update);
if($run_update===true){
    echo "sucessfully updated";
}
else{
    echo " failed";
}
}


?>
<a class="btn btn-primary mt-3" href="view_emp.php">View Employee</a>
</div>

   
  </body>
</html>
