<?php 

session_start(); 

if(isset($_SESSION['username']))
{ 
   echo "Hello ".$_SESSION['username'].", you are logged in."; 
   echo '<a href="kezdolap.html">'. Kezdőlap . '</a>';
} 

else{ 
   echo "Please log in"; 
} 

?> 