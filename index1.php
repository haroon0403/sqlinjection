<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="form">
<p>Welcome <?php echo  $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>

<a href="logout.php">Logout</a>


<br /><br /><br /><br />

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
