<?php
session_start();

?>




<?php
  $user='u460965022_user';                          /**** establishing database connection****/
$pwd='Rum420';
$db='u460965022_user';

$con=mysqli_connect("mysql.hostinger.in",$user,$pwd,$db);

  // Check connection
  if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      exit;
    }

  $check="SELECT count(*) FROM detail WHERE(email= '".$_POST['email']."' and password='".$_POST['passwd']."')";
  $result=mysqli_query($con,$check);
  $fetchdata=mysqli_fetch_array($result,MYSQLI_BOTH);

  if($fetchdata[0]<=0)
  {
    $_SESSION["authenticated"]=false;
    echo "login failed";
    session_destroy();
    session_unset();
    exit;
  }
  else
  {
    $check2="SELECT name,email FROM detail WHERE(email='".$_POST['email']."' and password='".$_POST['passwd']."')";
    $result2=mysqli_query($con,$check2);
    $read=mysqli_fetch_array($result2,MYSQLI_BOTH);


  $_SESSION["authenticated"]=true;
  $_SESSION["name"]=$read['name'];
  $_SESSION["email"]=$read['email'];



  $host=$_SERVER["HTTP_HOST"];
  $path=rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
  header("Location: http://$host$path/homepage.php");
  exit;

  }



    mysqli_free_result($result);
  mysqli_close($con);

?>
