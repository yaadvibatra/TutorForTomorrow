<?php
$msg="";
include "db.php";
session_start();
$name='';$gender='';$email='';$mobile_number;$age;$city='';$course='';$class;$subject='';$address='';$path='';





$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);

//$msg1="";
if(isset($_POST['btn_reg']))
{
    
    $name=$_POST['stuname'];
    $_SESSION['sname']=$name;
    $gender=$_POST['stugender'];
    $email=$_POST['stuemail'];
     $pwd=$_POST['stupswrd'];
    $mobile_number=$_POST['stunum'];
    $age=$_POST['stuage'];
    $city=$_POST['stucity'];
    $course=$_POST['stucourse'];
    $class=$_POST['stuclass'];
      $subject=$_POST['stusub'];
      $address=$_POST['stuaddress'];
      $source=$_FILES['myfile']['tmp_name'];
                
                $des=$_SERVER["DOCUMENT_ROOT"]."TutorForTomorrow/upload/".$_FILES['myfile']['name'];
                if(move_uploaded_file($source, $des))
                {
                    echo "<font color='green'>file uploaded successfully...</font>";
                    $path='upload/'.$_FILES['myfile']['name'];
                   echo "<img src='$path' width='150' height='150'/>";
                }

                
    
    $qry="update signup_student set student_name='$name' ,gender='$gender',password='$pwd',mobile_number='$mobile_number',age='$age',city='$city',course='$course',class='$class',subject='$subject',address='$address' profile_pic='$path' where email='$email'";
 
    mysqli_query($link,$qry);
    if(mysqli_affected_rows($link)>0)
        $msg="<font color='green'>RECORD Updated</font>";
    else 
    { $msg="<font color='red'>ERROR IN INSERTION</font>";
    mysqli_error($link);
    }
    mysqli_close($link);        
//header("location:ShowData.php");            
           
}

if(isset($_SESSION['sname']))
{
    $link=  mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
    $res=mysqli_query($link,"select * from signup_student where student_name='$_SESSION[sname]'"); 
  if(mysqli_affected_rows($link)>0)
  {
      while($r=  mysqli_fetch_assoc($res))
      {
      $name=$r['student_name'];
      $gender=$r['gender'];
      $email=$r['email'];
      $mobile_number=$r['mobile_number'];
      $age=$r['age'];
      $city=$r['city'];
      $course=$r['course'];
      $class=$r['class'];
      $subject=$r['subject'];
      $address=$r['address'];
      $path=$r['profile_pic'];
      }
  }
}
 mysqli_close($link);
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
            <h1><b>Edit Profile</b></h1>
            
                
                    
                      
            <div class="grid-container" >
                <form class="form-group" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        
                        
               
                        
                        <div class="col-sm-12"><label> Name</label><input type="text"    value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $name;
                                                                                                     ?>"  
                            class="form-control"  name="stuname"   size="50%" /></div>
                    </div>
                                <br>
                               <div class="form-group">
      
      <select class="form-control"  name="stugender">
        <option>Male</option>
        <option>Female</option>
        
        
      </select>
                            </div>
                                
                    <div class="row">
                        
                        <div class="col-sm-12"><input type="text" value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $email;
                                                                                                     ?>"   
                            class="form-control" name="stuemail"  /></div>
                        
                    </div><br>
                    <div class="row">
                      
                        <div class="col-sm-12"><input type="password" value=" Reset Password" class="form-control"   name="stupswrd"  /></div>
                    </div>
                    <br>
                    <div class="row">
                        
                        <div class="col-sm-12"><input type="password" value="Confirm password" class="form-control" name="stucnfpswrd"  /></div>
                    </div>
                    <br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $mobile_number;
                            ?>" accept="" class="form-control" name="stunum"  /></div>
                         </div>
                    <br>
                         
                         <div class="row">
                        
                             <div class="col-sm-12"><input type="number" value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $age;
                                                                                                     ?>" 
                                     class="form-control" name="stuage"  /></div>
                         </div>
                        <br>
                    
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $city;
                                                                                                     ?>"
                                   class="form-control" name="stucity"  />
                            
                            </div>
                         
                    </div>
                        <br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $course;
                                                                                                     ?>"
                                     class="form-control" name="stucourse"  />
                            
                            </div>
                    </div>
                        <br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="number" value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $class;
                                                                                                     ?>"
                                  class="form-control" name="stuclass"  />
                            
                            </div>
                    </div>
                        <br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="" value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $subject;
                                                                                                     ?>"
                                 class="form-control" name="stusub"  />
                            
                            </div>
                    </div>
                        <br>
                      <div class="form-group">
                          
                          <textarea class="form-control"  value="<?php if(isset($_SESSION['sname']))
                                                                                                       echo $address;
                                                                                                     ?>"
                                                    name="stuaddress" rows="3"></textarea>
  </div>  
                        
             Update Picture:<input type="file" name="myfile"/><br>
            
             <div class="row">
                                     <div class="col-sm-12"><input type="submit" class="form-control btn btn-primary" value="Update" name="btn_reg" /></div>
                                 </div>            
     
        
                            
                        
                              
                        <div class="row">
                                <div class="col-sm-12">
                                  
                                </div> 
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