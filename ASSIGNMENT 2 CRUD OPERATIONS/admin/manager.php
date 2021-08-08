<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    /* about us */
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    text-decoration: none;
    
}
.max_width{
    max-width: 1300px;
 
    padding: 0 80px;
    margin:auto;

}
section{
    padding: 100px 0;
}
.about, .skills{
    font-family: Arial, Helvetica, sans-serif;

}
.services{
    text-align:left;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
section .title{
    position: relative;
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    margin-bottom: 60px;
    padding-bottom: 20px;
    font-family: cursive;

}
.about .about_content .left img{
    height: 400px;
    width: 400px;
    object-fit: cover;
    border-radius: 6px;

}
.about .about_content .left{
width: 45%;
}
.about .about_content .right{
    width: 55%;
    }
.about .about_content,
.services .serv_content{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.about .about_content .right .text{
font-size: 30px;
font-weight: 600px;
margin-bottom: 10px;
    }
.about .about_content .right .text span{
    color: crimson;

}
.about .about_content .right a{
   
        display: inline-block;
        background-color: crimson;
        color:white;
        font-size: 25px;
        padding: 10px 30px;
        font-weight: 500;
        margin-top: 20px;
        border-radius: 6px;
        border: 2px solid crimson;
        transition: all 0.3s ease;
  

}
.about .about_content .right a:hover{
    color: crimson;
    background: none;
}
.about .about_content .right p{
    text-align: justify;
}
.about .title::after{
    content: "Who I Am...";
    }
    /*Simmilar code*/

section{
    padding: 100px 0;
}
section .title::before{
    content: "";
    position: absolute;
    width: 180px;
    height: 3px;
    background: black;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
}
.about .about_content,
.services .serv_content,
.skills .skills_content{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

section .title::after{
   
    position: absolute;
    padding: 5px;
    font-size: 20px;
    color: crimson;
    background: white;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
}

@media(max-width: 1104px){
    .about .about_content .left img{
        height: 350px;
        width: 35 0px;
     
    
    } 
   
}
@media(max-width:947px){
    .max_width{
        
        padding: 0 50px;
     
    
    }  
    .menu-btn i.active:before {
        content: "\f00d";
    }
    .navbars .menu{
        position: fixed;
        background: black;
        height: 100vh;
        width: 100%;
        left: -100%;
        top: 0;
        text-align: center;
        padding-top: 80px;
        transition:  all 0.3s ease;
    }
    .navbars .menu li{
        display: block;
    }
    .navbars .menu li a{
        display: inline-block;
        margin: 20px 0;
        font-size: 25px;

    }
    .menu-btn{
       display: block;
       z-index: 999;
    }

    .navbars .menu.active{
     left: 0;
    }
    .home .home_content .text-2{
        font-size: 70px;
      
    }
    .home .home_content .text-3{
        font-size: 35px;
      
    
    
    }
    
    .about .about_content .column{
    width: 100%;
    }
    .about .about_content .left{
      display: flex;
      justify-content: center;
      margin: 0 auto 60px;
    }

    .about .about_content .right{
    flex: 100%;
    }
    .services .serv_content .card{
        width: calc(50% - 10px);
        margin-bottom: 20px;
    }
    
    .skills .skills_content .column{
        width: 100%;
        margin-bottom: 35px;
        
    }

    .max_width{
        max-width: 800px;
       
    
    }
}
@media(max-width:1300px){
.home .max_width{
    margin-left:0px;
}
}
@media(max-width:991px){
    .max_width{
        padding: 0 50px;
    }
}


@media(max-width:690px){

    .max_width{
        padding: 0 23px;
    }
    .home .home_content .text-2{
        font-size: 60px;
      
    }
    .home .home_content .text-3{
        font-size: 32px;
      
    
    
    }
    .home .home_content a{
        font-size: 20px;
    }
    .services .serv_content .card, 
    .skills .skills_content .column{
        width: 100%
    }

}
@media(max-width:500px){

   
    .home .home_content .text-2{
        font-size: 50px;
      
    }
    .home .home_content .text-3{
        font-size: 27px;
      
    
    
    }
}
</style>
<body>
 

<!-- As a heading -->
<nav class="navbar navbar-light bg-dark">
  <span class="navbar-brand mb-0 h1">Navbar</span>
</nav>
  <!--about us-->
  <section class="about" id="about">
        <div class="max_width">
            <h2 class="title">About me</h2>
            <div class="about_content">
                <div class="column left">
                    <img src="../images/billgates.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I Am a <span>Web Developer & Graphic Desiginer</span></div>
                    <p> With 2 year experiences developing complex web based applications and e-commerce website.
                        Possesses strong technical skills and ability to lead Web development.I specialize in
                        building web applications.I have done work in Web development Front-end/back-end,database/NoSql
                        and graphic desigin...</p>
                   
                </div>

            </div>
        </div>

    </section>
   
</body>
<script src="../jss/jquery-3.6.0.min.js"></script>
<script src="../jss/bootstrap.min.js"></script>
</html>