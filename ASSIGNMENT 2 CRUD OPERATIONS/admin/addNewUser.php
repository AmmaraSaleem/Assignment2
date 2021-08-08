



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
height: 130vh;
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



</style>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-3 px-0">
<?php include 'includes/sidebar.php'?>




</div>
<div class="col-md-9 px-0">
<?php include 'includes/header.php'?>

<div class="container shadow p-3 mb-5 bg-white rounded">
<div class="row">
<div class="col-md-9">
<h2>USERS</h2>
</div>

</div>

</div>
<!-- 
<form action="adduser.php" method="POST" class="px-5 py-5 mx-auto d-block mb-5 col-9 my-5 rounded  " style="border:1px solid black">
   <fieldset >
     <legend></legend> 
     <div class="form-group">
      <label for="empname">Employee Name:</label>
      <input type="text" class="form-control" placeholder="Enter employee name" id="empname" name="empname">
    </div>


    <div class="form-group">
      <label for="dateofbirth">Date OF Birth:</label>
      <input type="text" class="form-control" placeholder="Enter date of birth" id="dateofbirth" name="dateofbirth">
    </div>
    <div class="form-group">
      <label for="dateofjoining">Date OF Joining:</label>
      <input type="text" class="form-control" placeholder="Enter date of joining" id="dateofjoining" name="dateofjoining">
    </div>

<button type="submit" class="btn btn-primary btn-block ">Submit</button>
  </fieldset>
</form> -->

<form action="adduser.php" method="POST" class="px-5 mx-auto d-block mb-5">

  
  
<div class="form-group">
      <label for="empname">Employee Name:</label>
      <input type="text" class="form-control" placeholder="Enter employee name" id="empname" name="empname">
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter your Email" id="Email" name="email">
    </div>

    <div class="form-group">
      <label for="dateofbirth">Date OF Birth:</label>
      <input type="text" class="form-control" placeholder="Enter date of birth" id="dateofbirth" name="dateofbirth">
    </div>
    <div class="form-group">
      <label for="dateofjoining">Date OF Joining:</label>
      <input type="text" class="form-control" placeholder="Enter date of joining" id="dateofjoining" name="dateofjoining">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
    </div>
  
  <button type="submit" class="btn btn-primary ">Submit</button>
 
</form>
</div>

</div>
</div>
</body>
<script src="../jss/jquery-3.6.0.min.js"></script>
<script src="../jss/bootstrap.min.js"></script>
</html>