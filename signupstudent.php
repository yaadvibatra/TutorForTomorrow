<?php
$msg="";
include 'db.php';
$path="";

if(isset($_POST['btn_reg']))
{
    $name=$_POST['stuname'];
    $gender=$_POST['stugender'];
    $email=$_POST['stuemail'];
    $pswrd=$_POST['stupswrd'];
    $num=$_POST['stunum'];
    $age=$_POST['stuage'];
    $city=$_POST['stucity'];
    $course=$_POST['stucourse'];
    $class=$_POST['stuclass'];
    $sub=$_POST['stusub'];
    $address=$_POST['stuaddress'];

    
   
                $source=$_FILES['myfile']['tmp_name'];
                
                $des=$_SERVER["DOCUMENT_ROOT"]."TutorForTomorrow/upload/".$_FILES['myfile']['name'];
                if(move_uploaded_file($source, $des))
                {
                    echo "<font color='green'>file uploaded successfully...</font>";
                    $path='upload/'.$_FILES['myfile']['name'];
                   echo "<img src='$path' width='150' height='150'/>";
                }

                
                
                
    $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
    $qry="insert into signup_student values('$name','$gender','$email','$pswrd',$num,$age,'$city','$course',$class,'$sub','$address','$path')"; 
    mysqli_query($link, $qry);
     if(mysqli_affected_rows($link)>0)
    {
     $msg="<font color='green'>SignUp Successful</font>";   
    }
 else {
        
        $msg="<font color='red'>Unsuccessful SignUp</font>";
        echo mysqli_error($link);
 }
 mysqli_close($link);
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
        <style>
         
            
            
            h1{
                font-style: inherit;
               text-align: center;
               background-size: auto;
               //padding-left:  20%;
             
            }
            .grid-container >div{
                grid-row-gap: 0;
                 padding-left:10%;
            }
            body{
                margin:0;
                font-family: Arial,Helvetica,sans-serif;
            }
           .hero-image {
  background-image: url("./images/r.jpg");
  background-color: #cccccc;
  height: 1000px;
  //background-position: center;
  background-repeat: no-repeat;
background-size: cover;
  position: relative;
  opacity:0.8;
}

.hero-text {
  //text-align: center;
  position: absolute;
  
padding-left:50%;
  
  
  color:white;
}
        </style>
    </head>
    <body>
        <?php
           include 'menu.php';
           ?>
       
        
           <div class="hero-image" class="img-responsive">
            <div class="row">
                <div class="col-sm-12" style="height:10px">
            </div>
        </div>
               <div class="hero-text">
            <h1><b>Sign Up</b></h1>
            
                
                    
                      
            <div class="grid-container" >
                <form class="form-group" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        
                        
               
                        
                        <div class="col-sm-12"><input type="text"  placeholder="Enter Name"  class="form-control"  name="stuname" value=""  size="50%" /></div>
                    </div>
                                <br>
                               <div class="form-group">
      
      <select class="form-control"  name="stugender">
        <option>Male</option>
        <option>Female</option>
        
        
      </select>
                            </div>
                                
                    <div class="row">
                        
                        <div class="col-sm-12"><input type="text" placeholder="Email"  class="form-control" name="stuemail" value="" /></div>
                        
                    </div><br>
                    <div class="row">
                      
                        <div class="col-sm-12"><input type="password" placeholder="Password" class="form-control"   name="stupswrd" value="" /></div>
                    </div>
                    <br>
                    <div class="row">
                        
                        <div class="col-sm-12"><input type="password" placeholder="Confirm password" class="form-control" name="stucnfpswrd" value="" /></div>
                    </div>
                    <br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" placeholder="Enter mobile number" class="form-control" name="stunum" value="" /></div>
                         </div>
                    <br>
                         
                         <div class="row">
                        
                             <div class="col-sm-12"><input type="number" placeholder="Enter age" class="form-control" name="stuage" value="" /></div>
                         </div>
                        <br>
                    
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" placeholder="Enter City" class="form-control" name="stucity" value="" />
                            
                            </div>
                         
                    </div>
                        <br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" placeholder="Enter Course" class="form-control" name="stucourse" value="" />
                            
                            </div>
                    </div>
                        <br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="number" placeholder="Enter Class" class="form-control" name="stuclass" value="" />
                            
                            </div>
                    </div>
                        <br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="" placeholder="Enter Subject"  class="form-control" name="stusub" value="" />
                            
                            </div>
                    </div>
                        <br>
                      <div class="form-group">
                          
                          <textarea class="form-control"  placeholder="address" name="stuaddress" rows="3"></textarea>
  </div>  
                           
             Upload Your Picture:<input type="file" name="myfile"/><br>
            
        
            
                        
                              <div class="row">
                                     <div class="col-sm-12"><input type="submit" class="form-control btn btn-primary" value="Signup" name="btn_reg" /></div>
                                 </div>
                        <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    echo $msg;
                                    ?>
                                </div> 
                </div> 
                    </form>
                </div>
                <div class="col-sm-4" ></div>
                
            </div>
                </div>
            <?php
            include("f.php");
            ?>
    </body>
</html>