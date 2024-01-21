<?php



if(isset($_POST['full_name']))
{



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_connect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$Mobile=$_POST['Mobile'];
$Guest=$_POST['Guest'];
$Date_=$_POST['Date_'];
$Time_=$_POST['Time_'];




// $sql = "INSERT INTO user (name,  email)
// VALUES ($name, $email)";
$sql = "INSERT INTO newuser (full_name, email, Mobile, Guest, Date_,Time_)
VALUES ( '".$full_name."', '".$email."', '".$Mobile."', '".$Guest."', '".$Date_."', '".$Time_."')";

if ($conn->query($sql) === TRUE) {
}
    echo "New record created successfully";
    
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>
