<?php

include "dbh.php" ;
$uname=$_POST["username"] ;
$email=$_POST["email"] ;
$pass=$_POST["password"] ;
$query="insert into users(username,	useremail, 	userpassword) values('$uname','$email','$pass')" ;
$result=$connection->query($query) ;    
header("Location:index.php") ;



?>