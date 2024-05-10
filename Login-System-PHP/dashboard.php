<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['student_id'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="dashboard.css">

	<title>Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="css/img/cdmlogo.jpg" style="width: 35%; border-radius: 50%; margin-left: 80px; margin-top: 60px;">
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a class="text" href="#head-title" >
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li >
				<a class="text" href="#view-grade">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">View Grades</span>
				</a>
			</li>
			<li>
				<a class="text" href="#table-data" >
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text" >My History</span>
				</a>
			</li>
			
				<li>
					<a href="login.php" class="logout">
						<i class='bx bxs-log-out-circle' ></i>
						<span class="text">Logout</span>
					</a>
				</li>
			
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			
			<i class='bx bx-menu' style="font-size: 50px;"></i>
			<i style="color: black; font-size: 40px;">Student ID : <?php echo $_SESSION['student_id']; ?></i>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title" id="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Student</p>
					</span>
				</li>
				
			</ul>


			<div class="table-data" id="view-grade" >
				<div class="order">
					<div class="head">
						<h1 class="h1">RESULT THIS SEMESTER</h1>
							<h4 class="h1">1st year</h4>
					</div>

					<div class="result">
							<table border="3px">
							<tr style="background-color: lightgreen;">
								<td colspan="1"">Fullname </td>
								<td colspan="1">Student ID </td>
								<td colspan="1">Year and Section</td>
								
							</tr>
<?php
require('db_conn.php');

$id = $_SESSION['id'];
$student_id = $_SESSION['student_id'];

$query = mysqli_query($conn, "select * from record where student_id = '$student_id'");
while($row = mysqli_fetch_array($query)) {
?>

    <tr>
        <td><?php echo $row['Fullname']; ?></td>
        <td><?php echo $row['student_id'];?></td>
        <td><?php echo $row['year_and_section'];?></td>
    </tr>

<?php 
}
?>
	
							<tr style="background-color: lightgreen;">
								<th>subject</th>
								<th>Grades</th>
							</tr>
					  
							<tr>
								<td>GE 2</td>
								<td>100</td>
							</tr>
					  
							<tr>
								<td>ITCOMP</td>
								<td>100</td>
							</tr>
					  
							<tr>
								<td>GE FIL1</td>
								<td>100</td>
							</tr>
					  
							<tr>
								  <td>GE MATH</td>
								  <td>100</td>
							</tr>
					  
							<tr>
								<td>PE 1</td>
								<td>100</td>
							</tr>
					
							<tr>
								<td>PROG 1</td>
								<td>100</td>
							</tr>

							<tr>
								<td>GE 1</td>
								<td>100</td>
							</tr>
					  
							<tr style="background-color: lightgreen;">
								<th colspan="1">GWA : </th>
								<th></th>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="table-data" id="table-data">
				<div class="order">
					<div class="head">
						<h1 class="h1">History last sem</h1>
							<h4 class="h1">1st year</h4>
					</div>

					<div class="result">
							<table border="3px">
							<tr>
								<td colspan="1"">Fullname: </td>
								<td colspan=""></td>
							</tr>
							<tr>
								<td colspan="1">Student ID: </td>
								<td colspan="0"></td>
							</tr>
					  
							<tr>
								<td colspan="1">Year and Section:</td>
								<td colspan="0"></td>
							</tr>
							
							<tr style="background-color: lightgreen;">
								<th>subject</th>
								<th>Grades</th>
							</tr>
					  
							<tr>
								<td name="english">english</td>
								<td>100</td>
							</tr>
					  
							<tr>
								<td>english</td>
								<td>100</td>
							</tr>
					  
							<tr>
								<td>english</td>
								<td>100</td>
							</tr>
					  
							<tr>
								<td>english</td>
								<td>100</td>
							</tr>
					  
							<tr>
								<td>english</td>
								<td>100</td>
							</tr>
					
							<tr>
								<td>english</td>
								<td>100</td>
							</tr>
					  
							<tr style="background-color: lightgreen;">
								<th colspan="1">GWA : </th>
								<th colspan="1" class="remark">Remarks : </th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="js/script.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>