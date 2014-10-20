<?php
@session_start(); 
if($_SESSION["auth"] != "session")
{ 
  header("Location: index.php"); 
  exit(); 
} 
?>