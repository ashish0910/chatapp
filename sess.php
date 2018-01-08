<?php
session_start() ;
if(issest($_SESSION['name']))
{
    
    echo $_SESSION['name'] ; 
}

?>