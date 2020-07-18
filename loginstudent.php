<?php
session_start();
include 'db.php';
$msg=NULL;
if(isset($_POST['btn_log']))
{
    $email=$_POST['txt_email'];
    $pwd=$_POST['txt_pwd'];
    $link=  mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
    $res=mysqli_query($link,"select * from signup_student where email='$email' and password='$pwd'");
  if(mysqli_affected_rows($link)>0)
  {
      $r=  mysqli_fetch_assoc($res);
      $_SESSION['sname']=$r['student_name'];
       $_SESSION['email']=$r['email'];
      header("location:home.php");
      
  }
  else
  {
     $msg="<font color='red'>Invalid Username and Password</font> ";
  }
}
?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title></title>
        <script>
            function CheckValue()
            {
                flag=true;
                x=document.getElementById("t1");
                y=document.getElementById("t2");
                if(x.value=="")
                {
                    flag=false;
                    x.style="border-color:red";
                }
                else
                {
                    x.style="";
                }
                if(y.value=="")
                {
                    flag=false;
                    y.style="border-color:red";
                }
                else
                {
                    y.style="";
                }
                return flag;
            }
            </script>
        <style>
         body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("./images/login5.jpg");
  //background-color: #cccccc;
  height: 800px;
  background-position:right;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  opacity:0.8;
}
            
            
            h1{
                font-size: 80px;
                font-style: inherit;
               text-align: center;
               background-size: auto;
               padding: 10px;
               color:white;
              
             
            }
            .grid-container >div{
                grid-row-gap: 10px;
                
                 
            }
           
        </style>
    
    </head>
    <body>
    <?php
    include 'menu.php';
    ?>
    <div class="hero-image">
            <div class="row">
                <div class="col-sm-12" style="height:10px">
            </div>
        </div>
            <h1><b>Login</b></h1>
       
        
              
            
                <div class="col-sm-4 "></div>
                <div class="col-sm-4">
                    <form class="form-group" method="POST" onsubmit="return CheckValue()">
                     
                        <div class="grid-container">
                            <div class="row">
                                     <div class="col-sm-12">
                                         <?php
                                         echo $msg;
                                         ?>
                                 </div>
                                 </div>
                         <div class="row">
                                     <div class="col-sm-12"><input type="text" id="t1" placeholder="Email ID" class="form-control" name="txt_email" value="" /></div>
                                 </div><br>
                                 <div class="row">
                                     <div class="col-sm-12"><input type="password" id="t2" placeholder="Password" class="form-control" name="txt_pwd" value="" /></div>
                                 </div><br>
                        
                        <div class="row">
                            <div class="col-sm-12"><input type="submit"  class="form-control btn btn-primary" value="Login" name="btn_log" /></div>
                                 </div>
                       
                    
               
                </div>
           <div class="row">
                <div class="col-sm-12">
                </div>  
           </div>
            
                    </form>
                        </div>
    </div>
       <?php
            include("f.php");
            ?>
    </body>
</html>