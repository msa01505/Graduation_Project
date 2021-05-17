<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["email"])) 
  {
    $emailErr = "Name is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    // check if name only contains letters and whitespace
    /*if (!preg_match("/^[a-zA-Z ]*$/",$email)) 
    {
      $emailErr = "Only letters and white space allowed";
    }*/
  }

  if (empty($_POST["pass"])) 
  {
    $passErr = "Name is required";
  } 
  else 
  {
    $pass = test_input($_POST["pass"]);
    // check if name only contains letters and whitespace
    /*if (!preg_match("/^[a-zA-Z ]*$/",$pass)) 
    {
      $passErr = "Only letters and white space allowed";
    }*/
  }
}
include 'db_connection.php';
if (!empty($email))
{
  $conn = OpenCon();
  if ($conn->connect_error) 
  {	
    die("Connection failed: " . $conn->connect_error);
  }
 // $new=arry("SELECT 'email' FROM 'user'");
  else 
  {	
  $sql = "SELECT  password,per FROM `user` WHERE email='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0 ) 
  {
  	//$confirm=$sql;
  	$row = $result->fetch_assoc();
    $conf=$row["password"];
    $per=$row["per"];
    $ConfirmPass=ConfirmPass($pass,$conf);
    if($ConfirmPass==1)
  	{
         $_SESSION["user"] = $email;
         if($per==1)
         {$_SESSION["per"]=$per;}
         $myfile = fopen("Home.php", "r+") or die("Unable to open file!");
         echo fgets($myfile);
         header("Location: Home.php?state=in"); 
  	}
  	else 	echo "pleas enter the correct Password ";
  }
  else	echo "pleas enter the correct email ";
  	
  
  }
}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function LogIn($email,$pass)
{
  $sql = "SELECT  `email`,`password` FROM `user` WHERE email='$email'";
	$run_query = mysqli_query($conn,$sql);
  if ($row = mysqli_fetch_array($run_query) ) 
  {
  	$check_pass = ConfirmPass($pass,$row["password"]);
  	if ($check_pass == 1)
  	{
  		 $myfile = fopen("Home.html", "r+") or die("Unable to open file!");
         echo fread($myfile,filesize("Home.html"));
         header("Location: Home.html"); 
         return;
  	}
  	else 
  	{
	  	echo "pleas enter the correct Password ";
	  	return;
  	}
  }
  else
  {
  	echo "pleas enter the correct email ";
  	return;
  }
}
function ConfirmPass($pass,$confirm)
{
  if($pass==$confirm)
  {
    return 1;
  }
  else 
  {
    return 0;
  }
}
?>