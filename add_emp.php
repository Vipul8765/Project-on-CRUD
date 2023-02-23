
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Employee</title>
  </head>
  <body>
    <h1 class="text-center">Add New Employee</h1>
    <div class="container mt-5">
    <form action="" method="post">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Employee ID</label>
    <input type="text" class="form-control" placeholder="Enter Your Employee ID" name="emp_id">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter Your name" name="emp_name">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" placeholder="Enter Your Email" name="emp_email">
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter Your Password" name="emp_password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile No.</label>
    <input type="text" class="form-control" placeholder="Enter Your Mobile No." name="emp_mobile">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Department</label>
    <input type="text" class="form-control" placeholder="Enter Your Department" name="emp_DepDetails">
  </div>

  <button type="submit" class="btn btn-primary w-100"  name="insert-btn">Submit</button>
  
</form>
</div>

   
  </body>
</html>
<?php
$conn=mysqli_connect('localhost','root','','project1');
//if(mysqli_connect_errno()){
 //   echo "connection failed";
//}
//else{
//    echo " connection Successful";
//}
if(isset($_POST['insert-btn'])){
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];
$emp_email=$_POST['emp_email'];
$emp_password=$_POST['emp_password'];
$emp_mobile=$_POST['emp_mobile'];
$emp_DepDetails=$_POST['emp_DepDetails'];

$insert="INSERT INTO employee(emp_id,emp_name,emp_email,emp_password,emp_mobile,emp_DepDetails) VALUES('$emp_id','$emp_name','$emp_email','$emp_password','$emp_mobile','$emp_DepDetails')";
$run_insert=mysqli_query($conn,$insert);
if($run_insert===true){
    echo "sucess";
    echo "<script>window.open('login.php','_self');</script>";
}
else{
    echo " failed";
}
}


?>


