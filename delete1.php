<?php
include 'db.php';
$email=$_GET['id'];
$link=  mysqli_connect(HOST, USERNAME, PASSWORD,DBNAME);
mysqli_query($link,"delete from signup_tutor where tutor_email='$email'");
mysqli_error($link);
mysqli_close($link);
header("location:tutor.php")
?>