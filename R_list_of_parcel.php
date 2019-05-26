<style>

  table { 
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 20px;
   text-align: left;
     } 

  th {
   background-color: #588c7e;
   color: white;
    }

  tr:nth-child(even) {background-color: #f2f2f2}
  
 </style>

<?php 
include("layout.php");
include("config.php");

session_start();
if(!isset($_SESSION['username'])){
	header('location: login.php');
}

//echo "Hello admin";
?>

<?php 
//include("menu_admin.php"); 
include("menu_admin_2.php");
?>

<div class="container">
	<div class="row">
		<div class="panel panel-default">
		    <div class="panel-heading">
		    	<h3 class="panel-title" align="Middle">List Of Parcel</h3>
		    </div>
		    <div class="panel-body">
		    	<table>
				 <tr>
				  <th>Id</th> 
				  <th>Name</th> 
				  <th>Matric No</th> 
				  <th>Phone Number</th> 
				  <th>Address</th>
				  <th></th>
				  <th></th>
				 </tr>

				 <?php
				$conn = mysqli_connect("localhost", "root", "", "practice_db");
				  // Check connection
				  if ($conn->connect_error) {
				   die("Connection failed: " . $conn->connect_error);
				  } 
				  $sql = "SELECT * FROM parcel";
				  $result = $conn->query($sql);

				  if ($result->num_rows > 0) {
				   // output data of each row
				   while($row = $result->fetch_assoc()) {
				    echo "<tr><td><form>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>" . $row["matricno"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["address"] . "</td><td>" . "<button>Delete</button></form>";

				}
				echo "</table>";
				} else { echo "0 results"; }
				$conn->close();
				?>
				</table> 
		    </div>
		</div>
	</div>
</div>

<?php include('footer.php');?>

