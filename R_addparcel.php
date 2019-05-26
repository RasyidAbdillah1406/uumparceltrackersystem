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
		    	<h3 class="panel-title" align="Middle">Add a new user</h3>
		    </div>
		    <div class="panel-body">

				<form method="post" action="getAddData.php">

					<div>
						<h5>Id :</h5>
						<input type="number" class="textinput" name="tid">
					</div>

					<div>
						<h5>Name :</h5>
						<input type="text" class="textinput" name="tname">
					</div>

					<div>
						<h5>Matric No :</h5>
						<input type="number" class="textinput" name="tmatric">
					</div>

					<div>
						<h5>Phone Number :</h5>
						<input type="number" class="textinput" name="tnumber">
					</div>

					<div>
						<h5>Address :</h5>
						<input type="text" class="textinput" name="taddress">
					</div>

					

					<br>
					<button type="submit" class="btn btn-primary" action="getAddData.php">Submit new user</button>

				</form>
				
		    </div>
		</div>
	</div>
</div>

<?php include('footer.php');?>

