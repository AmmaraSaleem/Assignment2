
<?php   
session_start();




include ("dbconnection.php");
$sql="SELECT * FROM  employees_record";
$result=mysqli_query($db,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<script src="https://kit.fontawesome.com/7c92b2459d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css"  href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<style>

.sidbar{
background-color: #ef5777;
color: white;
height: 100vh;
padding: 50px;


}

.sidbar ul{
    list-style-type:none;
}
.sidbar ul li{
    margin-top:20px
}
.sidbar ul li a{
    color: white;
}
.my-custom-scrollbar {
position: relative;
height: 300px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}


</style>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-3 px-0">
<?php include 'includes/sidebar.php'?>




</div>
<div class="col-md-9 px-0">
 <?php include 'includes/header.php'?> 
 

<div class="container">
<div class="row">
<div class="col-md-3">
<div class="card" >
  <img class="card-img-top" src="../images/icon.png" alt="Card image">
  <div class="card-body">
    <a href="users.php"   onclick="myFunction()" class="btn btn-primary btn-block">USERS</a>
  </div>
</div>

</div>

<div class="col-md-9">
<div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar ">
<table class="table  table table-bordered table-striped mb-0" >
<tr>

<th >Employees id</th>
<th >Employees Name</th>





</tr>


<?php  while($row=mysqli_fetch_assoc($result)){?>
<tr>
<td ><?php echo $row['emp_id'] ?></td>
<td ><?php echo $row['emp_name'] ?></td>


</tr>
<?php } ?>
</table>

 
</div>

</div>
</div>

</div>
</div>

</div>
</div>
</body>
<script>
function myFunction() {
  alert("SHOW EMPLOYEES DATA ");
}
</script>
<script src="../jss/jquery-3.6.0.min.js"></script>
<script src="../jss/bootstrap.min.js"></script>
</html>