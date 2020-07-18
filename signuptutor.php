<?php
$path="";
$msg="";
include 'db.php';
if(isset($_POST['btn_reg']))
{
    $name=$_POST['tut_name'];
    $gender=$_POST['tut_gender'];
    $email=$_POST['tut_email'];
    $pswrd=$_POST['tut_pswrd'];
    $num=$_POST['tut_num'];
    $qual=$_POST['tut_qual'];
    $age=$_POST['tut_age'];
    $experience=$_POST['tut_experience'];
    $city=$_POST['tut_city'];
    $course=$_POST['tut_course'];
    $class=$_POST['tut_class'];
    $sub=$_POST['tut_sub'];
    $price=$_POST['tut_price'];
    $address=$_POST['tut_address'];
     $source=$_FILES['myfile']['tmp_name'];
                
     $des=$_SERVER["DOCUMENT_ROOT"]."ICT_Training/upload/".$_FILES['myfile']['name'];
                if(move_uploaded_file($source, $des))
                {
                    echo "<font color='green'>file uploaded successfully...</font>";
                    $path='upload/'.$_FILES['myfile']['name'];
                   echo "<img src='$path' width='150' height='150'/>";
                }

                
                
  
    $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
    $qry="insert into signup_tutor values('$name','$gender','$email','$pswrd',$num,'$qual',$age,$experience,'$city','$course',$class,'$sub',$price,'$address','$path')";
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
              padding-top: 1px;
              color:black;
              font-size: 60px;
             
            }
            .grid-container >div{
                grid-row-gap: 0px;
                 padding:10%;
            }
            body{
                margin:0;
                font-family: Arial,Helvetica,sans-serif;
            }
           .hero-image {
  background-image: url("./images/signup_6.jpg");
  //background-color: black;
  height: 1300px;
 background-position:center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  //opacity:1;
}

.hero-text {
  //text-align: center;
  //position: relative;
  //top: 10%;
  padding-left:60%;
  padding-right: 10%;
  
  color:black;
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
            
                


<div class="row" >
                <div class="col-sm-4" ></div>
                
                    
                     
                        <div class="grid-container">
                            <form class="form-group" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        
                        <div class="col-sm-12"><input type="text"  placeholder="Enter Name"  class="form-control"  name="tut_name" value="" /></div>
                    </div>
                                <br>       
<div class="form-group">
      
      <select class="form-control"  name="tut_gender">
        <option>Male</option>
        <option>Female</option>
        
        
      </select>
                            </div>
      
                       
                    <div class="row">
                        
                        <div class="col-sm-12"><input type="text" placeholder="Email"  class="form-control" name="tut_email" value=""/></div>
                        
                    </div><br>
                    <div class="row">
                      
                        <div class="col-sm-12"><input type="password" placeholder="Password" class="form-control"   name="tut_pswrd" value="" /></div>
                    </div><br>
                    <div class="row">
                        
                        <div class="col-sm-12   "><input type="password" placeholder="Confirm password" class="form-control" name="tut_cnf_pswrd" value="" /></div>
                    </div><br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" placeholder="Enter mobile number" class="form-control" name="tut_num" value="" /></div>
                         </div><br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" placeholder="Qualification" class="form-control" name="tut_qual" value="" /></div>
                         </div><br>
                         <div class="row">
                        
                             <div class="col-sm-12"><input type="number" placeholder="Enter age" class="form-control" name="tut_age" value="" /></div>
                         </div><br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="number" placeholder="Enter experience" class="form-control" name="tut_experience" value="" />
                            
                            </div>
                         </div><br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" placeholder="Enter City" class="form-control" name="tut_city" value="" />
                            
                            </div>
                         
                         </div><br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" placeholder="Enter Course" class="form-control" name="tut_course" value="" />
                            
                            </div>
                         </div><br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="number" placeholder="Enter Class" class="form-control" name="tut_class" value="" />
                            
                            </div>
                         </div><br>
                         <div class="row">
                        
                            <div class="col-sm-12"><input type="text" placeholder="Enter Subject"  class="form-control" name="tut_sub" value="" />
                            
                            </div>
                         </div><br>
                            <div class="row">
                        
                            <div class="col-sm-12"><input type="number" placeholder="Enter Price(in Rs) "  class="form-control" name="tut_price" value="" />
                            
                            </div>
                            </div><br>
                      <div class="form-group">
                          
                          <textarea class="form-control"  placeholder="address" name="tut_address" rows="3"></textarea>
  </div>  
                            <br>
                             Upload Your Picture:<input type="file" name="myfile"/><br>
               
                              <div class="row">
                                     <div class="col-sm-12"><input type="submit" class="form-control btn btn-primary" value="SignUp" name="btn_reg" /></div>
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
               </div>
           </div>
           </div>
            
        <?php
            include 'f.php';
        ?>
    </body>
</html>