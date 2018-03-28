<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootst
rap-datetimepicker.min.js"></script>

 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

</head

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
<body>
<div class="container">
 Date of birth:   
<div class="row">
<div class="col-md-6">
          <h1 ><div id="addmark">marks entry</div></h1>  
			 <h1 id="">marks entry2</h1>  
			  <h1 id="">marks entry3</h1>  
       
 <!-- we have to add extra js and css for date picker check the head  tag partand script also added -->
  <br><br>
</div>
<div class="col-md-6">
            <div id="addmarkshow" style="display:none">
			 
			   <form method="post" action="markdetailstored.php">
 
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
		
    </select>
			   <br></br>	
			 select exam <select name ="exam">
<option   value="p"  > 1st term</option>
<option   value="a"  > 2nd term</option>
</select>
<br></br>	  
		 Marks1: <input id="username" type="number" name="m1">
  <br><br>
  Marks2: <input type="number" name="m2">
  <br><br>
   Marks3: <input id="form_phone" type="number" name="m3">
  <br><br>
 
   Marks4: <input type="number" name="m4">
  <br><br>
  
   
  marks5: <input id="number" type="m5" name="m5">
  <br><br>	   
			   
			   
			   
			   
  <input type="submit" name="submit" value="Submit">  
			   </form>
			</div>
			
       
 <!-- we have to add extra js and css for date picker check the head  tag partand script also added -->
  <br><br>
</div>


</div>


 <script type="text/javascript">
       
		$(document).ready(function(){
			console.log("suc");
    $("#addmark").click(function(){
        $("#addmarkshow").show();
		console.log("sucusss");
    });
    $("#").click(function(){
        $("p").show();
    });
});
		
    </script>
	
	<body>
	</html>
	