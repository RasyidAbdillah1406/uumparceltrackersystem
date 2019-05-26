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
		    	<h3 class="panel-title" align="Middle">LIST OF CUSTOMER</h3>
		    </div>
		    <div class="panel-body">
		    	<table>
				 <tr>
					<th>Id</th> 
					<th>username</th> 
					<th>password</th> 
					<th>type</th> 
				</tr>

				<?php
				$conn = mysqli_connect("localhost", "root", "", "practice_db");
				  // Check connection
				  if ($conn->connect_error) {
				   die("Connection failed: " . $conn->connect_error);
				  } 
				  $sql = "SELECT * FROM user";
				  $result = $conn->query($sql);

				  if ($result->num_rows > 0) {
				   // output data of each row
				   while($row = $result->fetch_assoc()) {
				    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>" . $row["password"] . "</td><td>" . $row["type"] . "</td><td>";

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

