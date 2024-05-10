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
			<li></li>
			<i style="color: black; font-size: 40px;"> = Student ID : <?php echo $_SESSION['student_id']; ?></i>
			<hr>
			<li></li><i style="color: black; font-size: 40px;"> = Course : <?php echo $_SESSION['course']; ?></i>
			<hr>
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
							<a style="color:grey" class="active" href="#">Home</a>
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


			<div class="table-data" id="table-data">
				<div class="order">
					<div class="head">
						<h1 class="h1">First semester </h1>
							<h4 class="h1">1st year</h4>
					</div>


					<?php
require('db_conn.php');

$id = $_SESSION['id'];
$student_id = $_SESSION['student_id'];

$query = mysqli_query($conn, "select * from students where student_id = '$student_id'");
while($row = mysqli_fetch_array($query)) {
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['year_and_section'] = $row['year_and_section'];
	 
?>
   
<div class="result">
    <table border="3px">
        <tr>
            <td colspan="1">Fullname: <?php echo $_SESSION['fullname']; ?> </td>
            <td colspan=""></td>
        </tr>
        <tr>
            <td colspan="1">Student ID: <?php echo $_SESSION['student_id']; ?> </td>
            <td colspan="0"></td>
        </tr>
        <tr>
            <td colspan="1">Year and Section: <?php echo $_SESSION['year_and_section']; ?></td>
            <td colspan="0"></td>
        </tr>
    
</div>

<?php 
}
?>
							
							<tr style="background-color: lightgreen;">
								<th>subject</th>
								<th>Grades</th>
							</tr>
					  
							<?php
require('db_conn.php');

$id = $_SESSION['id'];
$student_id = $_SESSION['student_id'];

$query = mysqli_query($conn, "select * from students where student_id = '$student_id'");
while($row = mysqli_fetch_array($query)) {
?>

    

				  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td><?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td><?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
							</tr>

	
	
					  
							<tr style="background-color: lightgreen;">
								<th colspan="1">GWA : <?php echo $_SESSION['year_and_section']; ?> </th>
								<th colspan="1" class="remark">Remarks : <?php echo $_SESSION['year_and_section']; ?></th>
							</tr>

							<?php 
}
?>
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
					<?php
require('db_conn.php');

$id = $_SESSION['id'];
$student_id = $_SESSION['student_id'];

$query = mysqli_query($conn, "select * from students where student_id = '$student_id'");
while($row = mysqli_fetch_array($query)) {
    $_SESSION['fullname'] = $row['fullname']; // assuming 'fullname' is a column in your 'student' table
    $_SESSION['year_and_section'] = $row['year_and_section'];
	 // assuming 'year_and_section' is a column in your 'student' table
?>
   
<div class="result">
    <table border="3px">
        <tr>
            <td colspan="1">Fullname: <?php echo $_SESSION['fullname']; ?> </td>
            <td colspan=""></td>
        </tr>
        <tr>
            <td colspan="1">Student ID: <?php echo $_SESSION['student_id']; ?> </td>
            <td colspan="0"></td>
        </tr>
        <tr>
            <td colspan="1">Year and Section: <?php echo $_SESSION['year_and_section']; ?></td>
            <td colspan="0"></td>
        </tr>
    
</div>

<?php 
}
?>
							<tr style="background-color: lightgreen;">
								<th>subject</th>
								<th>Grades</th>
							</tr>

							<?php
require('db_conn.php');

$id = $_SESSION['id'];
$student_id = $_SESSION['student_id'];

$query = mysqli_query($conn, "select * from students where student_id = '$student_id'");
while($row = mysqli_fetch_array($query)) {
?>

    

				  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td><?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					  
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td><?php echo $_SESSION['year_and_section']; ?></td>
							</tr>
					
							<tr>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
								<td> <?php echo $_SESSION['year_and_section']; ?></td>
							</tr>

	
	
					  
							<tr style="background-color: lightgreen;">
								<th colspan="1">GWA : <?php echo $_SESSION['year_and_section']; ?> </th>
								<th colspan="1" class="remark">Remarks : <?php echo $_SESSION['year_and_section']; ?></th>
							</tr>

							<?php 
}
?>
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