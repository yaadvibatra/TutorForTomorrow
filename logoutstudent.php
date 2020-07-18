<?php
session_start();
session_destroy();
header("location:loginstudent.php");
?>