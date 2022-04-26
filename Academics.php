<?php

session_start(); 
require_once "config.php";
?>
 
<!DOCTYPE html>
<html>

<?php 
    include ('header.php');
    include ('navigation.php');
?>
<link rel="stylesheet" href="style.css">
<body>
<div class='note'>
<?php
echo "These are the following subjects I have in my 4th Semester : ";
?>
<ol>
    <li>Software Engineering</li>
    <li>Design and Analysis of Algorithms</li>
    <li>Computer Networks</li>
    <li>Ethics for Engineers, Patents, Copyrights and IPR</li>
    <li>Operating Systems</li>
    <li>System and Network Security </li>
    <li>Linux Apache MySQL PHP (LAMP)</li>
</ol>
</div>
<?php include ('footer.php');?>
</body>
</html>