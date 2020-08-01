
 
<html>
    
    <head>
        <link rel="stylesheet" href="signup.css">
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

 if (isset($_POST['submit-form'])){

 require 'dbh.php';

 $name = $_POST['name'];
 $username = $_POST['username'];
 $email =  $_POST['email'];
 $pass = $_POST['pass'];
 $cpass = $_POST['cpass'];


 if(empty($name) || empty($username) || empty($email) || empty($pass) || empty($cpass))
 {
 	echo "fields are empty";
 	exit();
 }

  $result = mysqli_query($conn,"SELECT email FROM users WHERE email = '".$email."' ");
  if(mysqli_num_rows($result) > 0 )
  {
    echo  '<script>alert("Account already exists")</script>'; 

   exit();
    
             
  }




if($pass == $cpass)
{
 $sql = " INSERT INTO users (username,email,pass,cpass) VALUES ('$username','$email','$pass','$cpass')";
}
else
	echo "Passwords do not match";


if (mysqli_query($conn, $sql)) {
    
    	echo '<div id="signmsg">You were Signed in Successfully, </br> Welcome to Alpha Coding. </br> <a href="home.html">Go Back</a><div>' ;
} 

else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}





}
?>


