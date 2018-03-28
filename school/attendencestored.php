<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="collegedb";
session_start();
$_SESSION['message'] = "";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $status= $_POST["status"];
  $name= $_POST["name"];
  $date= $_POST["date"];
}
 //var_dump($name);

 $x = explode(" ",$name);
echo $x[2];

$sql = "INSERT INTO attendence(id,name,status,date)VALUES ('$x[1]','$x[2]','$status','$date')";
if ($conn->query($sql) === TRUE) {
	
   
   echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}2
?>
</body>
</html>