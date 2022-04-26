<?php

session_start(); 
require_once "config.php";
?>
 
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<?php 
    include ('header.php');
    include ('navigation.php');
?>
<body>
<div class='note' style="
  position: relative;
  width: 480px;
  margin: 30px auto 20px auto;
  background: #fff;
  padding: 45px;
  border-radius: 7px;
  box-shadow: 0 1px 5px rgb(138, 137, 137);
 ">
<p>
<?php
echo "Hello, My name is Divyansh. This Website is created by me 🙋‍♂️ for my LAMP Assignment 02 📒. Thank you for visiting this page. 😊";
?>
</p>
</div>
<?php include ('footer.php');?>
</body>
</html>
