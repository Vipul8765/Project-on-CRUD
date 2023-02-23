<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>Employee Details Table</h2>
<?php
//delete employee
$conn=mysqli_connect('localhost','root','','project1');
if(isset($_GET['del'])){
    $del_id=$_GET['del'];
    $delete="DELETE FROM employee WHERE emp_id='$del_id'";
    $run_delete=mysqli_query($conn,$delete);
}


?>
              
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>MOBILE</th>
        <th>DepDetails</th>
        <th>DELETE</th>
        <th>UPDATE</th>

      </tr>
    </thead>
    <tbody>
     <?php
     //create employee 
     $conn=mysqli_connect('localhost','root','','project1');
     $select="SELECT * FROM employee";
     $run=mysqli_query($conn,$select);
     while($row_user=mysqli_fetch_array($run)){
        $emp_id=$row_user['emp_id'];
        $emp_name=$row_user['emp_name'];
        $emp_email=$row_user['emp_email'];
        $emp_password=$row_user['emp_password'];
        $emp_mobile=$row_user['emp_mobile'];
        $emp_DepDetails=$row_user['emp_DepDetails'];
     ?>
      <tr>
        <td><?php echo $emp_id;?></td>
        <td><?php echo $emp_name;?></td>
        <td><?php echo $emp_email;?></td>
        <td><?php echo $emp_password;?></td>
        <td><?php echo $emp_mobile;?></td>
        <td><?php echo $emp_DepDetails;?></td>
        <td><a class="btn btn-danger"href="view_emp.php?del=<?php echo $emp_id;?>">Delete</a></td> 
        <td><a class="btn btn-success"href="edit_emp.php?edit=<?php echo $emp_id;?>">Update</a></td> 
        
    
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
  <a class="btn btn-primary mt-3" href="logout.php">Logout</a>
</div>

</body>
</html>
