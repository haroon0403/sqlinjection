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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Standard Login<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="login1.php">Vulnerable</a></li>
              <li><a href="login2.php">Secure</a></li>
            </ul>
          </li>
       
        </ul>

        </ul>
		<h3 class="text-muted"><a href="index.php">SQL-Injection</a></h3>
      </div>
      <?php include("mobile-navbar.php"); ?>
      
      <h3 class="text-center"><span class="label label-success">
Secure Login</span></h3><br>
      
       <?php
        if ( isset($_GET['attempt']) != 1)
        {
      ?>
      
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <form class="form-horizontal" role="form" action="login2.php?attempt=1" method="POST">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-8">
                <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="Username" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-8">
                <input name="password" type="text" class="form-control" id="inputPassword3" placeholder="Password" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
                <p>Not registered yet? <a href='registration.php'>Register Here</a></p>

              </div>
            </div>
          </form>
        </div>  
      </div>
      

      

      <?php
          }
        else
        {
          
      require('db_connect.php');
  session_start();


    // If form submitted, insert values into the database.
   // if (isset($_POST['username'])){
    
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($connection,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($connection,$password);
    
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `users1` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($connection,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
    $_SESSION['username'] = $username;
      header("Location: search2.php"); // Redirect user to index.php
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
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($connection,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($connection,$password);
    
  //Checking is user existing in the database or not

 $query = "SELECT * FROM `users1` WHERE username='$username' and password='".md5($password)."'";
 $result = mysqli_query($connection,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
 
    if($rows==1){
    $_SESSION['username'] = $username;
      header("Location: index1.php"); // Redirect user to index.php
            }
            else
            {
            echo "<p class=\"text-center\">Wrong username/password combination.</p>";
            }


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
