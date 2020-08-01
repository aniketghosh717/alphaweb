 
<html>
    
    <head>
        <link rel="stylesheet" href="logout.css">
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
        <title>Alpha Coding</title>
        <meta charset="utf-8">
    </head>
        
    <nav>
        <ul>
            <li><a href=home.html >Home</a></li>
            <li><a href=about.html >About</a></li>
            <li><a href=team.html >Team</a></li>
            <li><a href=contact_us.html>Contact Us</a></li>
            <li><a href="login.html"><button >Login</button></a></li>
        </ul>
        
        </nav>



    

        <html>

        

<?php

error_reporting(E_ALL ^ E_WARNING); 




if (isset($_POST['encrypt']))
{


$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project2";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Not Connected";
} 



 $website = $_POST['website'];
 $username = $_POST['username'];
 $email =  $_POST['email'];
 $password = $_POST['password'];
 $notes = $_POST['notes'];



 if(empty($website) ||  empty($email) || empty($password))
 {
    echo "Website or Email or Password is Empty";
    exit();
 }


 $result = mysqli_query($conn,"SELECT website FROM data WHERE website = '".$website."' ");
  if(mysqli_num_rows($result) > 0 )
  {
    echo  '<script>alert("Entry for this website already exists")</script>'; 

   exit();
    
             
  }
else
{






 
    $sql = " INSERT INTO data (website,email,username,password,notes) VALUES ('$website','$email','$username','$password','$notes')";
 


 if (mysqli_query($conn, $sql)) {
    
        echo '<div id="signmsg">Your details were saved successfully. </br> <a href="profile.php">Go Back</a><div>' ;
} 

else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
}
}
