<?php
include ("dbconnection.php");
  session_start();
 

   $id=$_GET['id'];
   $sql="DELETE FROM employees_record  WHERE emp_id='$id'";
   
   $result=mysqli_query($db,$sql);




    if($result == 1){
      $_SESSION['success']="User Delete Successfully";
      header("location:users.php");
      
    }
    else{
      $_SESSION['error']="Something went wrong";
      header("location:users.php");
    } 
?>

