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

$_SESSION['username'] = "$username";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
}

$sql = "SELECT id, username, password FROM studenttable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["email"]. "<br>";
		if($username == $row["username"] )
		{
			
			 //header("location:admindetails.html");
			echo " login successssssssss   " .$username;
		

		
		 
		 
		}
		else{
			echo "try again" .$username;
		}


   }
} else {
    echo "0 results";
}



mysqli_close($conn);


?>

</body>
</html>