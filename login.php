<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password"placeholder="Password" required="required">
        </div>
        <div class="form-group">
<input type="submit" name="login-btn" class="btn btn-primary btn-block" value="Login"/>
</div>
             
    </form>
    <?php
$conn=mysqli_connect('localhost','root','','project1');
if(isset($_POST['login-btn'])){
$email=$_POST['email'];
$password=$_POST['password'];
$select="SELECT * FROM employee WHERE emp_email='$email'";
     $run=mysqli_query($conn,$select);
     $row_user=mysqli_fetch_array($run);
        $db_email=$row_user['emp_email'];
        $db_password=$row_user['emp_password'];
        if($db_email==$email && $db_password==$password){
           echo "<script>window.open('index.php','_self');</script>";
           $_SESSION['email'] = $db_email;
        }
        else{
            echo "Wrong Email or Password.";
        }

        
}

?>
<a class="btn btn-primary" href="add_emp.php">Create Lgoin Details</a>
</div>
</body>
</html>