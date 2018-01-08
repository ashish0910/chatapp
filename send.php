<?php
session_start() ;
include "dbh.php" ;
$msg=$_POST['message'] ;
$name=$_SESSION['name'] ;

$query="insert into posts(message,name) values('$msg','$name') " ;
$result=$connection->query($query) ;
header("Location:home.php") ;
?>