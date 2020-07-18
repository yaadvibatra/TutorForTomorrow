<?php
session_start();
session_destroy();
header("location:logintutor.php");
?>