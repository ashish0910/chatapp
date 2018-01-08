<?php
session_start() ;
include "dbh.php" ;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="home.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body >
    <div class="container">
    <br>
    <h1>WELCOME TO WEBCHAT</h1>
    <br>
    <br>   
        
        <h1>
         <?php   
          echo $_SESSION['name'] ;
        
        ?>-Online</h1>
    </div>
    <div class="output container" id="scan">
     <?php   
      $query = "SELECT * FROM posts " ;
      $result = $connection->query($query) ;
      while($row= $result->fetch_assoc())  
      {if($result->num_rows>0)
      {
          
          echo "".$row["name"]." "."::".$row["message"]."--".$row["date"]."<br>" ;
          echo "<br>" ;
      }
       else
        {
           echo "No Messages Found" ;
        }
     
      }
    $connection->close() ;    
    ?>    
    </div>
    
    <form method="post" action="send.php" class="form-signin" >
    <div class="form-group container">
    <textarea class="form-control" name="message" placeholder="Enter Your Message Here" rows="3"></textarea>
    </div>    
    <div class="form-group container">
    <input type="submit" value="Send" class="btn btn-lg btn-primary">       
    </div> 
    <br>    
        
    </form>
    <div class="container form-group">
    <form action="logout.php" >
    <input type="submit" value="Logout" class="btn btn-lg btn-primary" > 
    </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    window.setInterval(function() {
  var elem = document.getElementById('scan');
  elem.scrollTop = elem.scrollHeight;
}, 1000);  
    </script>
    
  </body>
</html>