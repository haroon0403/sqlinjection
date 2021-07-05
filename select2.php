<?php




include("connect.php");
include("auth.php");


// Selects all the records
$sql = "SELECT * FROM movies";

$recordset = mysql_query($sql, $link);  

function sqli($data)
{
         
    //switch($_COOKIE["security_level"])
    {
        
      

    }       

    return $data;

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SQL Injection demo">
    <meta name="author" content="Francesco Borzì">

    <title>SQL Injection</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header hidden-xs">
        <ul class="nav nav-pills pull-right">

          <li class="active dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="search2.php">Secure</a></li>
            
            </ul>
          </li>
          <li class="active dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Select<b class="caret"></b></a>
            <ul class="nav dropdown-menu">
              <li><a href="select2.php">Secure</a></li>
             
            </ul>
          </li>
        </ul>
        <h3 class="text-muted"><a href="index.php">SQL-Injection</a></h3>
      </div>
      <?php include("mobile-navbar.php"); ?>
      
       <h3 class="text-center"><span class="label label-success">
Secure Search</span></h3><br>



<div class="form">
<p>Welcome <?php echo  $_SESSION['username']; ?>!</p>
<p>This is vulnerable area.</p>


        <a href="logout.php" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>



<br /><br /><br /><br />

</div>



    <form action="<?php echo($_SERVER["SCRIPT_NAME"]); ?>" method="GET">

        <p>Select a movie:

        <select name="movie">

<?php

            // Fills the 'select' object
            while($row = mysql_fetch_array($recordset))
            {

?>
            <option value="<?php echo $row["id"];?>"><?php echo $row["title"];?></option>
<?php

            }

?>

        </select>   

               <button type="submit" class="btn btn-primary">Go</button>

        </p>

    </form>

    <table id="table_yellow">

        <tr height="30" bgcolor="#45a0a5" align="center">

            <td width="200"><b>Title</b></td>
            <td width="80"><b>Release</b></td>
            <td width="140"><b>Character</b></td>
            <td width="80"><b>Genre</b></td>
            <td width="80"><b>IMDb</b></td>

        </tr>
<?php

if(isset($_GET["movie"]))
{   

    $host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="sqli";


    //PDO Database connection

    $db=new PDO("mysql:host=$host;dbname=$db_name;",$db_user,$db_pass);

    $sql="select * from movies where id=:MovieID";

    $stmt=$db->prepare($sql);



    $id = $_GET["movie"];


     $stmt->bindParam(":MovieID",$id,PDO::PARAM_INT);

    //Exce

    $stmt->execute();

    if($stmt->rowcount() > 0)
    {
        $row=$stmt->fetch();

    

    

?>

        <tr height="30">

            <td><?php echo $row["title"]; ?></td>
            <td align="center"><?php echo $row["release_year"]; ?></td>
            <td><?php echo $row["main_character"]; ?></td>
            <td align="center"><?php echo $row["genre"]; ?></td>
            <td align="center"><a href="http://www.imdb.com/title/<?php echo $row["imdb"]; ?>" target="_blank">Link</a></td>

        </tr>     
<?php     

    }

    else
    {

?>

        <tr height="30">

            <td colspan="5" width="580">No movies were found!</td>
            <!--
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            -->

        </tr>      
<?php        

    }

}

else
{

?>

        <tr height="30">

            <td colspan="5" width="580"></td>
            <!--
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            -->

        </tr>
<?php

}

mysql_close($link);

?>

    </table>    

    
    </form>
    
</div>

   <h4>PHP Code:</h4>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12">
          <div class="highlight">
            <pre>

  if(isset($_GET["title"]))
    {
     $title = $_GET["title"];
     $sql = "SELECT * FROM movies WHERE title LIKE '%" . sqli($title) . "%'";
     $recordset = mysql_query($sql, $link);
     if(!$recordset)
     {

        // die("Error: " . mysql_error());

    }

    if(mysql_num_rows($recordset) != 0)
    {

        while($row = mysql_fetch_array($recordset))         
        {

            // print_r($row);




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
      
</body>
    
</html>