

<div class="container-fluid" style="padding-left: 0px; padding-right: 0px; padding-bottom: 0px; background-size: contain">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="#">Home Tutors</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">city<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="Meerut.php">Meerut</a></li>
            <li><a href="dehradun.php">dehradun</a></li>
          <li><a href="kanpur.php">kanpur</a></li>
          <li><a href="new_delhi.php">new delhi</a></li>
          <li><a href="lucknow.php">lucknow</a></li>
          <li><a href="varanasi.php">Varanasi</a></li>
          <li><a href="ahmedabad.php">Ahmedabad</a></li>
        </ul>
      </li>
       
      <li><a href="contact_us.php">contact us</a></li>
      <li><a href="about_us.php">about us</a></li>
      
    </ul>
      
    <ul class="nav navbar-nav navbar-right">
       
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome
                <?php
                if(isset($_SESSION['name']))
                {
                    echo  $_SESSION['name']; 
                }
                else {
                        echo 'Tutor';
                }
                ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
            
            <?php
            if(!isset($_SESSION['name']))
            {
                echo "<li><a href='signuptutor.php'>SignUp</a></li>";
                        
                echo "<li><a href='logintutor.php'>Login</a></li>";
            }
            else
            {
                echo  "<li><a href='viewprofilet.php'>View Profile</a></li>"; 
               echo  "<li><a href='logouttutor.php'>Logout</a></li>";
            }
            ?>
          
          
        </ul>
      </li>
        <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Welcome
                <?php
                if(isset($_SESSION['sname']))
                {
                    echo  $_SESSION['sname']; 
                }
                else {
                        echo 'Student';
                }
                ?><span class='caret'></span></a>  
      
      
        <ul class="dropdown-menu">
            
            <?php
            if(!isset($_SESSION['sname']))
            {
                echo "<li><a href='signupstudent.php'>SignUp</a></li";
                echo "<li><a href='loginstudent.php'>Login</a></li>";
            }
            else
            {
                echo  "<li><a href='viewprofilest.php'>View Profile</a></li>";
            echo "<li><a href='logoutstudent.php'>Logout</a></li>";
            }
            ?>
          
          
        </ul>
            
      </li>
      <?php
      if(isset($_SESSION['role']))
      {
    echo "<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Admin Panel<span class='caret'></span></a>";
    echo"    <ul class='dropdown-menu'>";
      echo"   <li><a href='student.php'>Student</a></li>";
      echo "   <li><a href='tutor.php'>Tutor</a></li>";
      echo"   <li><a href='logoutadmin.php'>Logout</a></li>";
          
          
      echo"  </ul>";
     echo" </li>";
      }
      else
         echo" <li><a href='loginadmin.php'><span class='glyphicon glyphicon-log-in'></span> Admin Login</a></li>";
      ?>
      
    </ul>
         </div>
</nav>
</div>