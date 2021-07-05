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
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Standard Login<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="login1.php">Vulnerable</a></li>
              <li><a href="login2.php">Secure</a></li>
            </ul>
          </li>

      
        </ul>
        </ul>
        <h3 class="text-muted"><a href="index.php">SQL-Injection </a></h3>
      </div>
      <?php include("mobile-navbar.php"); ?>

      <div class="jumbotron">
        <img src="sql.jpg" width="280" height="200" title="Logo of a company" alt="Logo of sql injection" />
        
      </div>

      <?php include("footer.php"); ?>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
