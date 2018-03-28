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
 
  $exam= $_POST["exam"];
  $name= $_POST["name"];
  $m1= $_POST["m1"];
   $m2= $_POST["m2"];
    $m3= $_POST["m3"];
	 $m4= $_POST["m4"];
	  $m5= $_POST["m5"];
}
 //var_dump($name);

 $x = explode(" ",$name);
echo $x[2];

$sql = "INSERT INTO marktable(id,name,exam,m1,m2,m3,m4,m5)VALUES ('$x[1]','$x[2]','$exam','$m1','$m2','$m3','$m4','$m5')";
if ($conn->query($sql) === TRUE) {
	
   
   echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}2
?>
</body>
</html>