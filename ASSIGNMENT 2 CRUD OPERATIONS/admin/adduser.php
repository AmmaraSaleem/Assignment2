


<?php

define('DB_SERVER','sql208.epizy.com');
define('DB_USERNAME','epiz_29309029');
define('DB_PASSWORD','dyQTeb7M7NDJV');
define('DB_DATABASE','epiz_29309029_UsersRecords');
session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {



    $empname=$_POST['empname'];
    $empemail=$_POST['email'];
    $dateofbirth=$_POST['dateofbirth'];
    $dateofjoining=$_POST['dateofjoining'];
    $empass=$_POST['password'];

   $sql="INSERT INTO  employees_record (emp_name,date_of_birth,date_of_joining,email,password) 
   VALUES ('$empname','$dateofbirth','$dateofjoining',' $empemail',' $empass')";
   
   $result=mysqli_query($db,$sql);


   if($result == 1){
    $_SESSION['success']="User added Successfully";
    header("location:users.php");
  }
  else{
    $_SESSION['error']="Something went wrong";
    header("location:users.php");
  }

} 
?>


