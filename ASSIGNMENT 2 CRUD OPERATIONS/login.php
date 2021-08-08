<?php

include ("admin/dbconnection.php");

  session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $email=$_POST['email'];
    $password=$_POST['password'];

   $sql="SELECT * FROM employees_record  ";
   $result=mysqli_query($db,$sql);
   $row=mysqli_fetch_assoc($result);
  
   
  }


  if($password==$row['password']){
     header("location:admin/dashboard.php");
    }
    else{
   $_SESSION['error']="Invlid User";
   header("location:loginform.php");
  }

      
      
  ?>
      




