<?php

session_start() ;

include "dbh.php" ;
$uname=$_POST['username'] ;
$pass=$_POST['password'] ;    
$query="SELECT * FROM users WHERE username='$uname' AND userpassword='$pass' " ;

$result=$connection->query($query) ;

if(!$row=$result->fetch_assoc())
{
    header("Location:error.php") ;
}
else
{
    $_SESSION['name']=$_POST['username'] ;
    
    
    header("Location:home.php") ;
}


?>