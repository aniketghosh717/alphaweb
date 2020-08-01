<html>
    
    <head>
        <link rel="stylesheet" href="mydata.css">
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


        <?php 


   

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "project2";

$mysqli = new mysqli("$servername", $dBUsername , $dBPassword, $dBName); 
$query = "SELECT * FROM data";
 
 
echo '<table  border="0" cellspacing="8" cellpadding="8"> 
      <tr id="new"> 
          <td> Website Name</font> </td> 
          <td> Email</td> 
          <td> Username</td> 
          <td> Password</td> 
          <td> Notes</td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["website"];
        $field2name = $row["email"];
        $field3name = $row["username"];
        $field4name = $row["password"];
        $field5name = $row["notes"]; 
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>



    

        <html>
