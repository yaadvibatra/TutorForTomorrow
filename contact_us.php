<?php
$msg="";
include 'db.php';
if(isset($_GET['sub']))
{
    $name=$_GET['txt_name'];
    $email=$_GET['txt_email'];
    $number=$_GET['txt_number'];
    $subject=$_GET['txt_subject'];
    $feedback=$_GET['txt_feedback'];
     $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
     $qry="insert into contact_us(name,email,phone_number,subject,feedback) values('$name','$email',$number,'$subject','$feedback')";
     mysqli_query($link, $qry);
     if(mysqli_affected_rows($link)>0)
    {
     $msg="<font color='green'>Thanks for your feedback</font>";   
    }
 else {
        
        $msg="<font color='red'>Unsuccessful </font>";
        echo mysqli_error($link);
 }
 mysqli_close($link);
}


?>
<?php
session_start();
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
       <style>
body {
  //margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("./images/1.jpg");
  //background-color: #cccccc;
  height: 650px;
  //background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  opacity:0.8;
}
.hero-text {
  text-align: left;
  position: relative;
  top: 20%;
  left:10%;
  font-size:20px ;
  color: white;
}
.ptext{
    text-align: left;
  position:relative;
  top: 20%;
  left:30%;
  font-size:20px ;
  color: white;
    
}
.grid-container  {
    grid-row-gap: 20px;  
    width:80%;
    border: black;
    border-radius: 5px;
   padding-bottom: 5px;
  // padding-top: 5px;
    }

</style>
    </head>
    <body>
        
            <?php
            include("menu.php");
            
            ?>
            
        <div class="hero-image">
        <div class="row">
            <div class="col-sm-6">

  <div class="hero-text">
    <h1>Contact info</h1>
    <address>
        <h3> <i>Dit University,Dehradun,Uttarakhand</i> </h3>
        <h3> <i>Call:7351260590</i><br></h3>
        <h3><i> Call:9992218548 <br></h3>
        <h3><i>www.hometutor.co.in </i><br></h3>
        <h3><i>WhatsApp:9410179413</i><br></h3>
         <h3><i>hometutor@gmail.com</i><br></h3>
         <h3><i>Working Time:Mon to Sat 9.00AM to 6.00PM </i><br></h3>
         </address>
  </div>
</div>
           
   
<div class="col-sm-6">
     <div class="ptext">
<h1><i>Send Us An Inquiry</i></h1>
<div class="grid-container">
    
                        <div class="grid-container">
              <form class="form-group">
                   
                      
             <div class="row">
                    <div class="col-sm-12"><input type="text"  placeholder="Enter Name"  class="form-control"  name="txt_name" value="" size="100" /></div>
                    </div>
                           <br>  
             <div class="row">
                 <div class="col-sm-12"><input type="text" placeholder="Email"  class="form-control" name="txt_email" value=""  size="50" /></div>
             </div>  <br>
                   
             <div class="row">
                        
                     <div class="col-sm-12"><input type="text" placeholder="Enter mobile number" class="form-control" name="txt_number" value="" size="50"/></div>
                     </div>
                             <br>
              <div class="row">
                  <div class="col-sm-12"><input type="" placeholder="Enter Subject"  class="form-control" name="txt_subject" value=""  size="50"/>
                     </div>
                     </div>
                             <br>
              <div class="form-group" >
                      <textarea class="form-control"  placeholder="Feedback" name="txt_feedback" rows="3"  ></textarea>
                      </div>  
              <div class="row">
                  <div class="col-sm-6"><input type="submit" value="Register" name="sub"  style="background-color:blue" /></div>
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
</div>
</div>
       
   
           
            <div class="row">
                <div class="col-sm-12" >
            </div>
        </div>
            <?php
            include("f.php");
            ?>
        
    </body>
</html>
