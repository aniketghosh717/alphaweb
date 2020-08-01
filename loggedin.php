 
<html>
    
    <head>
        <link rel="stylesheet" href="loggedin.css">
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
        <title>Alpha Coding</title>
        <meta charset="utf-8">
    </head>
        
  
        </html>




 <?php

 if (isset($_POST['submit-form'])){

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project2";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Not Connected";
} 

  $email = $_POST["email"]; 
  $password = $_POST["pass"]; 



 if(empty($email) || empty($password))
 {
    echo "fields are empty";
    exit();
 }




        $result = mysqli_query($conn,"SELECT email, pass FROM users WHERE email = '".$email."' AND  pass = '".$password."'");

          if(mysqli_num_rows($result) > 0 )
        { 
           header("Location: profile.php"); 
             exit; 
        }
        else
        {
            echo 'The Email and Password are incorrect!';
        }







 }