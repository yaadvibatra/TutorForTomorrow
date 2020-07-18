<!DOCTYPE html>
<html>
   <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
      
      body{
          background-color: #E5E4E3;
          //border-spacing: 5;
      }
      
      label{
          font-family:ink-free;
          font-weight:bold;
          color:black;
      }
      
      </style>
</head>
    <body>
    
       <?php
       include("menu.php");
       ?>
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                       include 'db.php';
                       $link=  mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
                       $result=  mysqli_query($link, "select * from signup_tutor where tutor_city='Varanasi'");
                       if(mysqli_affected_rows($link)>0)
                       {
                           $x=0;
                           while($r=  mysqli_fetch_assoc($result))
                           {
                               if($x==0)
                                   echo "<div class='grid-container'";
                                   echo "<div class='row'>";
                               echo"<div class='col-sm-3'>";
                               echo "<div class='row'>";
                               echo "<div class='col-sm-12' style='border-style:solid' >";
                               echo "<a href='dehradunpf.php?tutor_email=$r[tutor_email]'><img src='$r[tutor_profile_pic]' class='imgstyle'/></a>";
                               echo "</div>";
                               echo "</div>";
                               echo "<div class='row'>";
                               echo "<div class='col-sm-6' 'text-align:right'>";
                               
                               echo "<label>Name:</label>";
                               echo "</div>";
                               echo "<div class='col-sm-6'>";
                               echo "<label>$r[tutor_name]</label>";
                               echo "</div>";
                               echo "</div>";
                               echo "<div class='row'>";
                               echo "<div class='col-sm-6' 'text-align:right'>";
                               
                               echo "<label>Qualification:</label>";
                               echo "</div>";
                               echo "<div class='col-sm-6'>";
                               echo "<label>$r[tutor_qualification]</label>";
                               echo "</div>";
                               echo "</div>";
                               echo "<div class='row'>";
                               echo "<div class='col-sm-6' 'text-align:right'>";
                               
                               echo "<label>Experience:</label>";
                               echo "</div>";
                               echo "<div class='col-sm-6'>";
                               echo "<label>$r[tutor_experience]</label>";
                               echo "</div>";
                               echo "</div>";
                                echo "<div class='row'>";
                               echo "<div class='col-sm-6' style='text-align:right'>";
                               echo "<label>Fees:</label>";
                               echo "</div>";
                               echo "<div class='col-sm-6'>";
                               echo "<label>$r[tutor_price]</label>";
                               echo "</div>";
                               echo "</div>";
                                echo " <div class='row'>";
                               echo "     <div class='col-sm-6'><input type='submit' class='form-control btn btn-primary' value='View Profile' name='btn_view' /></div>";
                              if(isset($_GET['btn_view']))
                               header('location:varanasipf.php');
                               echo"  </div>";
                               echo "</div>";
                              echo "</div>";
                              
                       
                               $x++;
                               if($x==4)
                               {
                                   echo "</div>";
                                   $x=0;
                               }
                           }
                       }
                       else
                       {
                           echo "<h style='font-size:50px'>NOT FOUND..!!</h>";
                       }
                ?>
            </div>
        </div>
        </div>
        <?php
                include 'f.php';
        ?>
    </body>
</html>
