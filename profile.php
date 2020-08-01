 
<html>
    
    <head>
        <link rel="stylesheet" href="profile.css">
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
            <li><a href="logout.php"><button >Logout</button></a></li>
        </ul>
        
        </nav>

        <h1>Encrypt and Save your passwords safely </br>at one place without worrying about it</br> getting stolen from hackers.</br>Enter your detail in the fields</br> and they will be hashed and saved.</br><a method="post"  href="mydata.php">See My Passwords>></a></h1>


        <form action="entry.php" method="post">
         <input type="text" name="website" placeholder="Website">
         <input type="email" name="email" placeholder="Email">
         <input type="text" name="username" placeholder="Username">
         <input type="password" name="password" placeholder="Password">
         <input type="text" name="notes" placeholder="Notes">
         <center><input type="submit" name="encrypt" id="encrypt" value="Encrypt & Save"></form></center>
     </form>



        
  
        </html>









        