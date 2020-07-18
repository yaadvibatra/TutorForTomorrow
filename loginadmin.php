<?php
session_start();
$msg="";
include 'db.php';

if(isset($_POST['btn_login']))
{
    $u=$_POST['txt_username'];
    $p=$_POST['txt_pwd'];
    $link=  mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
    $res=mysqli_query($link,"select * from admin where username='$u' and password='$p'");
  if(mysqli_affected_rows($link)>0)
  {
      $r=  mysqli_fetch_assoc($res);
      $_SESSION['role']=$r['username'];
     
      header("location:home.php");
      
  }
  else
  {
     $msg="<font color='red'>Invalid Username and Password</font> ";
  }
}
?>

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
                font-size: 70px;
                font-style: inherit;
               text-align: center;
               background-size: auto;
               padding: 10px;
               color:black;
              
             
            }
            .grid-container >div{
                grid-row-gap: 10px;
                 
            }
        </style>
            
    </head>
    <body>
        <div class="row">
    <div class="col-sm-12" style="background-color:  darkseagreen;height:200px;text-align: center;padding-top: 50px">
        <h1 style="font-size: 60px">Admin Panel</h1>
    </div>
</div>
        <?php
        include 'menu.php';
        ?>
        <div class="row">
                <div class="col-sm-12" style="height:10px">
            </div>
        </div>
            <h1 style="font-size: 50px"><b>Login</b></h1>
       
        
              
            
                <div class="col-sm-4 "></div>
                <div class="col-sm-4">
                    <form class="form-group" method="POST">
                     
                        <div class="grid-container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    echo $msg;
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                     <div class="col-sm-12">
                                         
                                 </div>
                                 </div>
                         <div class="row">
                                     <div class="col-sm-12"><input type="username" placeholder="Username" class="form-control" name="txt_username" value="" /></div>
                                 </div><br>
                                 <div class="row">
                                     <div class="col-sm-12"><input type="password" placeholder="Password" class="form-control" name="txt_pwd" value="" /></div>
                                 </div><br>
                        
                        <div class="row">
                                     <div class="col-sm-12"><input type="submit" class="form-control btn btn-primary" value="Login" name="btn_login" /></div>
                                 </div>
                                 
                                 
                    
               
                </div>
           <div class="row">
                <div class="col-sm-12">
                </div>  
           </div>
           
                    </form>
                        </div>
                                                        
                <div class="row">
                    <div class="col-sm-12">
                     <?php
            include("f.php");
            ?>   
                    </div>
                </div>
        
    </body>
   
</html>