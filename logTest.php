<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Fname"])) 
  {
    $FnameErr = "Name is required";
  } 
  else 
  {
    $Fname = test_input($_POST["Fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Fname)) 
    {
      $FnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["Lname"])) 
  {
    $LnameErr = "Name is required";
  } 
  else 
  {
    $Lname = test_input($_POST["Lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Lname)) 
    {
      $LnameErr = "Only letters and white space allowed";
    }
  }

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

  if (empty($_POST["confirm"])) 
  {
    $confirmErr = "Name is required";
  } 
  else 
  {
    $confirm = test_input($_POST["confirm"]);
    // check if name only contains letters and whitespace
    /*if (!preg_match("/^[a-zA-Z ]*$/",$confirm)) 
    {
      $confirmErr = "Only letters and white space allowed";
    }*/
  }

  if (empty($_POST["phone"])) 
  {
    $phoneErr = "Name is required";
  } 
  else 
  {
    $phone = test_input($_POST["phone"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$phone)) 
    {
      $phoneErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["bdate"])) 
  {
    $bdateErr = "Name is required";
  } 
  else 
  {
    $bdate = test_input($_POST["bdate"]);
    // check if name only contains letters and whitespace
    /*if (!preg_match("/^[a-zA-Z ]*$/",$bdate)) 
    {
      $bdateErr = "Only letters and white space allowed";
    }*/
  }

  if (empty($_POST["country"])) 
  {
    $countryErr = "Name is required";
  } 
  else 
  {
    $country = test_input($_POST["country"]);
    // check if name only contains letters and whitespace
    /*if (!preg_match("/^[a-zA-Z ]*$/",$country)) 
    {
      $countryErr = "Only letters and white space allowed";
    }*/
  }

  if (empty($_POST["gender"])) 
  {
    $genderErr = "Name is required";
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
  }
}
include 'db_connection.php';
if (!empty($Fname))
{
  $conn = OpenCon();
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }
 // $new=arry("SELECT 'email' FROM 'user'");
  else 
  {
    $ConfirmPass=ConfirmPass($pass,$confirm);
    if($ConfirmPass==1)
    {
       $new=NewUser($Fname, $pass, $email, $country, $bdate, $Lname, $confirm, $phone, $gender, $conn);
       if($new==1)
       {
        $_SESSION["user"] = $email;
         $myfile = fopen("Home.php", "r+") or die("Unable to open file!");
         echo fgets($myfile);
         header("Location: Home.php?"); 
       }
    }
    else     echo "Make sure that you hade enter the same password at both cells";
  }
}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function NewUser($Fname, $pass, $email, $country, $bdate, $Lname, $confirm, $phone, $gender,$conn)
{
  $sql = "SELECT  `email` FROM `user` WHERE email='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0 ) 
  {
    echo "This user is exist, Pleas login or use another email";
  }
  else
  {
    $sql = "INSERT INTO user ( name, Password, email, country, bdate, surname, confirm, phone, gender)
    VALUES ('$Fname', '$pass', '$email', '$country', '$bdate', '$Lname', '$confirm', '$phone', '$gender')";
    if (!($conn->query($sql)))
    {
      echo "Error: ". $sql ."
      ". $conn->error;
    }
      return 1; 
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