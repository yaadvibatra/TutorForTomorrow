<?php
session_start();
include 'db.php';
$name='';$gender='';$email='';$mobile_number;$age;$city='';$course='';$class;$subject='';$address='';  echo $_SESSION['sname'];
?>

<html>
    <head>
        <title>
        </title>
        <style>
       .hero-image {
  background-image: url("./images/332.jpg");
  //background-color: #cccccc;
  height: 1200px;
  //background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  opacity:0.7;
}
            
            
            
            
            h1{
                //font-family: cursive;
                text-align:center;font-size:55px;padding:30px;color:whitesmoke;
            }
            .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: auto;
  text-align: center;
  font-family: arial;
  padding-top: 2%;
  background-color: whitesmoke;
}

.title {
  color: grey;
  font-size: 20px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
  
}

button:hover, a:hover {
  opacity: 0.7;
}
        </style>
    </head>
    <body>
        
        
        <div class="hero-image">
            <?php


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
      $mobile_number=$r['mobile_number'];  echo $mobile_number;
      $age=$r['age'];
      $city=$r['city'];
      $course=$r['course'];
      $class=$r['class'];
      $subject=$r['subject'];
      $address=$r['address'];
      }
  }
}
echo "<div class='row'>";  
 echo   "<div class='col-sm-4 bg-info'>";
        
  echo  "</div>";
  echo  "<div class='col-sm-4 bg-info'>";
        
       // echo "<h1 >$name</h1>";
        echo "<h1 style='text-align:center'>$name's Profile</h1>";

echo"<div class='card'>";
 // <img src="/w3images/team2.jpg" alt="John" style="width:100%">
  echo"<h2>$name</h2>";
  echo "<p class='title'>Gender:$gender</p>";
  echo "<p class='title'>Email ID:$email</p>";
  echo "<p class='title'>Contact:$mobile_number</p>";
  echo "<p class='title'>Age:$age</p>";
 
 echo" <p class='title'>City:$city</p>";
 echo "<p class='title'>Course:$course</p>";
   echo "<p class='title'>Class:$class</p>"; 
   
  echo"<p class='title'>Tuitions Required:$subject</p>";
  echo "<p class='title'>Address:$address</p>";
 
 echo"<a href='edit_profile_st.php?id1=$email'><input type='button' class='button' value='Edit Profile'></a>";

 
echo"</div>";
       
    echo"</div>";
    echo"<div class='col-sm-4 bg-info'>";
        
   echo "</div>";
    
echo"</div>";

?>
        </div>
           
        
    </body>
    
</html>