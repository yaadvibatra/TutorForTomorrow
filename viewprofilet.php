
<?php
session_start();
include 'db.php';
$name='';$gender='';$email='';$mobile_number;$qual='';$age;$experience;$city='';$course='';$class;$subject='';$price;$address='';
?>


<html>
    <head>
        <title>
        </title>
        <style>
            .hero-image {
  background-image: url("./images/332.jpg");
  //background-color: #cccccc;
  height: 920px;
  //background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  opacity:0.7;
}
            
            h1{
                //font-family: cursive;
                text-align:center;font-size:55px;padding:30px;color: white;
            }
            .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 550px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: whitesmoke;
  padding-top: 2%;
}

.title {
  color: grey;
  font-size: 18px;
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
if(isset($_SESSION['name']))
{
    $link=  mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
    $res=mysqli_query($link,"select * from signup_tutor where tutor_name='$_SESSION[name]'");
  if(mysqli_affected_rows($link)>0)
  {
      while($r=  mysqli_fetch_assoc($res))
      {
      $name=$r['tutor_name'];
      $gender=$r['tutor_gender'];
      $email=$r['tutor_email'];
      $mobile_number=$r['tutor_mobilenumber'];
      $qual=$r['tutor_qualification'];
      $age=$r['tutor_age'];
      $experience=$r['tutor_experience'];
      $city=$r['tutor_city'];
      $course=$r['tutor_course'];
      $class=$r['tutor_class'];
      $subject=$r['tutor_subject'];
      $price=$r['tutor_price'];
      $address=$r['tutor_address'];
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
  echo "<p class='title'>Qualification:$qual</p>";
  echo "<p class='title'>Age:$age</p>";
 echo "<p class='title'>Experience:$experience</p>";
 echo" <p class='title'>City:$city</p>";
 echo "<p class='title'>Course:$course</p>";
   echo "<p class='title'>Class:$class</p>"; 
   
  echo"<p class='title'>Tuitions Required:$subject</p>";
  echo "<p class='title'>Price:$price</p>";
  echo "<p class='title'>Address:$address</p>";
 
 echo"<input type='button' class='button' onclick='edit_profile_t.php?id=$email' value='Edit Profile'>";

 
echo"</div>";
       
    echo"</div>";
    echo"<div class='col-sm-4 bg-info'>";
        
   echo "</div>";
    
echo"</div>";
?>




        
        </div>
        

    </body>
    
</html>