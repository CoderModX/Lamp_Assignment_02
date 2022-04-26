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
<?php
echo "These are the following things I have learnt : ";
?>
<ol>
    <li>Python</li>
    <li>Java</li>
    <li>C++</li>
    <li>Html</li>
    <li>Css</li>
    <li>Javascript</li>
    <li>JQuery</li>
    <li>ReactJs</li>
    <li>MySQL</li>
    <li>MongoDB</li>
    <li>NodeJs</li>
    <li>ExpressJs</li>
    <li>EJS</li>
</ol>
</div>
<?php include ('footer.php');?>
</body>
</html>