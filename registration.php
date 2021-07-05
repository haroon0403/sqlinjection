

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
	require('db_connect.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($connection,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($connection,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($connection,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users1` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($connection,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login2.php'>Login</a></div>";
        }
    }else
?>
<div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <form class="form-horizontal" role="form" action="" method="POST">
            <div class="form-group">
              <label for="un" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-8">
                <input name="username" type="text" class="form-control" id="un" placeholder="Username" /required>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-8">
                <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email"/required>
              </div>
            </div>


            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-8">
                <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password" pattern="(?=.*\d) (?=.*[a-z]) (?=.*[A-Z]) .{8, }" title="must conta"required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign up</button>
                <p>already registered <a href='login2.php'>click Login</a></p>

              </div>
            </div>
          </form>
        </div>  
      </div>


<?php  ?>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
