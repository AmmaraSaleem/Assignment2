<?php

include ("dbconnection.php");

  session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {


    $empId=$_POST['empId'];
    $empname=$_POST['empname'];
    $dateofbirth=$_POST['dateofbirth'];
    $dateofjoining=$_POST['dateofjoining'];

   $sql="UPDATE employees_record SET emp_name='$empname',date_of_birth='$dateofbirth',date_of_joining='$dateofjoining' WHERE emp_id='$empId'";
   
   $result=mysqli_query($db,$sql);




    if($result == 1){
      $_SESSION['success']="User Updated Successfully";
      header("location:users.php");
      
    }
    else{
      $_SESSION['error']="Something went wrong";
      header("location:users.php");
    }
} 
?>



