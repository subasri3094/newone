
<!DOCTYPE HTML>  
<html>
<head>


 
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->


 <!--<script src="js/bootstrap.min.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
<style>
.cust-pdng{
	padding-top;50px;
		    padding: 35px 0px;
	}

</style>

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
 // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["image"]. "<br>"
}
 ?>
 
 
 <div class="container cust-pdng">
<form method="post" action="attendencestored.php">
 <h1> attendence details </h1>
 
 <div class="row">
<div class="col-md-6">


    <?php	
$sql = "SELECT id, username, password FROM studenttable";
$result = mysqli_query($conn, $sql);
        ?>                     
   studentname    <select name="name"> 
	   <?php	
		 while($row = mysqli_fetch_assoc($result))
            {
          
            ?>    	    
		 <option value = " <?php echo($row['id']." ".$row['username']) ?>" >  <!-- value is taken as student name and id -->
           <?php echo($row['id']." ->".$row['username']) ?>
            </option>
        <?php
			}?>	
<br></br>			
    </select>
	Status <select name ="status">
<option   value="p"  > present</option>
<option   value="a"  > absent</option>
</select>
<br></br>	

</div>

<div class="col-md-6">
 Date of leave:   <input type='text'  id='datetimepicker4'  name="date">
<input type="submit" name="submit" value="Submit">  

</div>
</div>

</form>
</div>
     
		 <script type="text/javascript">
        $(function () {
			console.log("sucess");
            $('#datetimepicker4').datetimepicker({
              
                format: 'YYYY/MM/DD'
            });
        });
    </script>

</body>
</html>