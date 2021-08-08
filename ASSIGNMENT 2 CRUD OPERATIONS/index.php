<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.start-bg{
   background-color: black
}


.wellcome{
   
   
   width: 450px;
   font-size: 43px;
  background-color:white;
    margin-top:10%;
   border: rgba(13, 100, 35, 0.959);
   border-radius: 50px;
   font-family: cursive;
   color: green;
   box-shadow: 2px 3px 8px green;
   padding: 15px 15px;
  
  
}

.wellcome:focus{
   cursor: pointer;
   outline: none;
  
}

.box div
{
   position: absolute;
   width: 60px;
   height: 60px;
   background-color: transparent;
   background-image: linear-gradient( to right,rgba(13, 100, 35, 0.959),rgb(37, 226, 12) );
   border: 6px solid rgba(255,255,255,0,0.8);


}
.box div:nth-child(1){
   top: 12%;
   left: 45%;

   animation: animate 10s linear infinite;
}
.box div:nth-child(2){
   top: 70%;
   left: 50%;

   animation: animate 7s linear infinite;
}

.box div:nth-child(3){
   top: 17%;
   left: 6%;

   animation: animate 9s linear infinite;
}
.box div:nth-child(4){
   top: 20%;
   left: 60%;

   animation: animate 10s linear infinite;
}
.box div:nth-child(5){
   top: 67%;
   left: 10%;

   animation: animate 6s linear infinite;
}
.box div:nth-child(6){
   top: 80%;
   left: 70%;

   animation: animate 12s linear infinite;
}
.box div:nth-child(7){
   top: 60%;
   left: 80%;

   animation: animate 15s linear infinite;
}
.box div:nth-child(8){
   top: 32%;
   left: 25%;

   animation: animate 16s linear infinite;
}
.box div:nth-child(9){
   top: 90%;
   left: 25%;

   animation: animate 9s linear infinite;
}
.box div:nth-child(10){
   top: 20%;
   left: 80%;

   animation: animate 5s linear infinite;
}
@keyframes animate{
   0%{
       transform: scale(0)translateY(0) rotate(0);
       opacity: 1;
   }
   100%
   {
       transform: scale(1.3) translateY(-90px) rotate(360deg);
       opacity: 0.6;
   }
}
.start {
  
   text-align: center;
   margin-top: 10%;
   }



@keyframes modalUp{
   from{
       top: 100%;
       opacity: 0;
   }
   to{
       top: 50%;
       opacity: 1;
   }
}
@media screen and (max-width:600px)
{
.wellcome {
 width: 100%;
 margin-top: 20%;

}
.logo{
    margin-left: 20%;
    margin-top: 10%;

}
.chat{
    width:300px
}
}



</style>
<body class="start-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="whatapp/logo.jpg" class="logo" alt="">

                <div class="start"> <a href="loginform.php"><button class="wellcome">Sign Up</button></a>




                </div>
            </div>
        </div>
    </div>
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div-->


        <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-auth.js"></script>
        <script src="app.js"></script>



</body>

</html>