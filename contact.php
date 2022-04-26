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
<div class='note'>
<?php   echo "You can Contact me at : e20cse270@bennett.edu.in <br/>";  ?>
<a href = "mailto: e20cse270@bennett.edu.in" style="    
    background-color: #f5ba13;
    border: none;
    color: white;
    padding: 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 20px 2px 0px 0px;
    cursor: pointer;
    border-radius: 4px;">Send Email</a>
</div>
<?php include ('footer.php');?>
</body>
</html>
