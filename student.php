<?php
session_start();
?>


<html>
   <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="row">
    <div class="col-sm-12" style="background-color:  darkseagreen;height:200px;text-align: center;padding-top: 50px">
        <h1 style="font-size: 60px">Admin Panel</h1>
    </div>
</div>
       <?php
       include("menu.php");
       ?>
        <div class="row">
            <div class="col-sm-12" style="height:385px">
                <h1>
                    Student Details
                </h1>
                <?php
                       include 'db.php';
                       $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
                       $result=  mysqli_query($link, "select * from signup_student");
                       if(mysqli_affected_rows($link)>0)
                       {
                           echo "<table border='1' width=100%>";
                           echo "<tr>";
                           echo "<th>Name</th><th>Gender</th><th>Email</th><th>Password</th><th>Mobile Number</th><th>Age</th><th>City</th><th>Course</th><th>Class</th><th>Subject</th><th>Address</th><th></th>";
                           echo "</tr>";
                           while($row=  mysqli_fetch_array($result))
                           {
                               echo "<tr>";
                               echo "<td>$row[0]</td>";
                               echo "<td>$row[1]</td>";
                               echo "<td>$row[2]</td>";
                               echo "<td>$row[3]</td>";
                               echo "<td>$row[4]</td>";
                               echo "<td>$row[5]</td>";
                               echo "<td>$row[6]</td>";
                               echo "<td>$row[7]</td>";
                               echo "<td>$row[8]</td>";
                               echo "<td>$row[9]</td>";
                               echo "<td>$row[10]</td>";
                              echo "<td><a href='delete.php?id=$row[2]'>Delete</a></td>";
                               //echo "<td><a href='delete.php?id=$row[1]'>Delete</a></td>";
                               echo "</tr>";
                           }
                           echo "</table>";
                       }
                ?>
            </div>
        </div>
        <?php
                include 'f.php';
        ?>
       
    </body>
</html>