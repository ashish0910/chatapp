
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles.css">
    
    <title>Webchat</title>
  </head>
  <body>
    
    <div class="container">

      <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">Please login</h2>
        <label for="Username" class="sr-only">Username</label>
        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
<!--        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>-->
      <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block">
      </form>

    </div>
    <br><br>
    
    
    <div class="container">
    
      <form method="post" action="signup.php" class="form-signin">
      <h2 class="form-signin-heading">Signup Here</h2>   
       <label for="Username" class="sr-only">Username</label>   
        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus> 
        <label for="Email" class="sr-only">EmailId</label>    
        <input type="email" class="form-control" placeholder="Email"
        name="email">     
       <label for="Password" class="sr-only">Password</label>   
        <input type="password" name="password" class="form-control" placeholder="Password" required>        
        <label for="submit" class="sr-only">Login</label>
        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block">
     
     
     </form>   

    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>