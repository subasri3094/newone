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
//these 3 are adde dthe image
$file = $_FILES['image']['tmp_name'];
	$image = file_get_contents($_FILES['image']['tmp_name']);
	$image_name = $_FILES['image']['name'];
	$image_size = getimagesize($_FILES['image']['tmp_name']);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	

$file = addslashes($_FILES['image']['tmp_name']);
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['iname']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
  $name = $_POST["name"];
   $fathername = $_POST["fathername"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
	  $username = $_POST["username"];
	 $password = $_POST["password"];
   $phone = $_POST["phone"];
		  $city = $_POST["city"];
			  $pincode = $_POST["pincode"];
  $email = $_POST["email"];
    
	
	

}

$_SESSION['name'] = "$name";

//$sql = "INSERT INTO studenttable(image)VALUES ('$image')";
$sql = "INSERT INTO studenttable(name,fathername, dateofbirth, gender, username, password, phone, city, pincode, email, image)VALUES ('$name', '$fathername', '$dob',  '$gender', '$username', '$password', '$phone', '$city', '$pincode', '$email', '$image')";




if ($conn->query($sql) === TRUE) {
	$_SESSION['message'] = "registration  $name is success";
   header("location:index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
</body>
</html>