<?php 
    require "db_connect.php";
?>
<!DOCTYPE html>
<html>
  <head>
   

    <title>SQL Injection</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header hidden-xs">
        <ul class="nav nav-pills pull-right">
          <li class="active dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Standard Login<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="login1.php">Vulnerable</a></li>
              <li><a href="login2.php">Secure</a></li>
            </ul>
          </li>
<li class="dropdown">
        
        </ul>
		<h3 class="text-muted"><a href="index.php">SQL-Injection</a></h3>
      </div>
      <?php include("mobile-navbar.php"); ?>
      
      <h3 class="text-center"><span class="label label-danger">
Vulnerable Login</span></h3><br>
      
      <?php
        if ( isset($_GET['attempt'] )!= 1)
        {
      ?>
      
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <form class="form-horizontal" role="form" action="login1.php?attempt=1" method="POST">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-8">
                <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-8">
                <input name="password" type="text" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
              </div>
            </div>
          </form>
        </div>  
      </div>
      
      <?php
        }
        else
        {

 
  session_start();
            $username = $_POST['username'];
            $password = $_POST['password'];

              
            //$query = sprintf("SELECT * FROM users WHERE username = '%s' AND password = '%s';",
                            // $username,
                            // $password);
             $query = "SELECT * FROM `users1` WHERE username='$username' and password=md5('$password')";

            // $query = "SELECT * FROM users1 WHERE username = '" . $username . "' AND password = '" . md5('$password'). "'";
          
            $result = mysqli_query($connection, $query);
          
            if ($result->num_rows > 0)
            {
            $_SESSION['username'] = $username;
      header("Location: search1.php"); // Redirect user to index.php
            }else{
         echo "<p class=\"text-center\">Wrong username/password combination.</p>";
        }
      ?>
      
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <h4>Query Executed:</h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12">
          <div class="highlight">
            <pre><?= $query ?></pre>
          </div>
        </div>
      </div>
      
      <?php } ?>
      
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <h4>PHP Code:</h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12">
          <div class="highlight">
            <pre>
$username = $_POST['username'];
$password = $_POST['password'];

$query = sprintf("SELECT * FROM users WHERE username = '%s' AND password = '%s';",
                 $username,
                 $password);

$result = mysqli_query($connection, $query);

if ($result->num_rows > 0)
{
    echo "Authenticated as " . $username;

    // ...
    // $_SESSION['logged_user'] = $username;
    // ...
}
else
{
    echo "Wrong username/password combination.";
}
            </pre>
          </div>
        </div>
      </div>
      
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <h4>Vulnerability:</h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12">
          <div class="highlight">
            <pre>
Pass <strong>1' OR '1'='1</strong> as password to get authenticated.
            </pre>
          </div>
        </div>
      </div>
      
      <br>

      <?php include("footer.php"); ?>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
