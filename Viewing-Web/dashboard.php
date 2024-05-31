<?php 
session_start();

if (isset($_SESSION['StudentID']) && isset($_SESSION['studentNo']) ) {

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
			<li>
				<a class="text" href="#head-title" >
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li >
				<a href="#view-grade">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">View Grades</span>
				</a>
			</li>
			<li>
				<a  href="#table-data" >
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
			
			<li></li>
			<i style="color: black; font-size: 25px; font-family:Arial, Helvetica, sans-serif"> Student ID : <?php echo $_SESSION['studentNo']; ?></i>
			<hr>
			<li></li><i style="color: black; font-size: 25px; font-family:Arial, Helvetica, sans-serif"> Course: <?php echo $_SESSION['department']; ?></i>
			<hr>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			




		<div class="home" id="home">
		<div class="head-title" id="head-title" ">
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
			<h1 style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:50px;color:black;">Welcome</h1>
			<img src="css/img/fontbackground.jpg" style="width: 900px; height:600px;">
		</div>







			<div class="table-data" id="currentSemester" style="display: none;">
				<div class="order">
					<div class="head">
						<h1 class="h1" style="color: green;">View Grades</h1>
						
					</div>


					<?php
require('db_conn.php');

$StudentID = $_SESSION['StudentID'];
$studentNo = $_SESSION['studentNo'];

$query = mysqli_query($conn, "select * from adminstudent where studentNo = '$studentNo'");
while($row = mysqli_fetch_array($query)) {
    $_SESSION['fname'] = $row['fname'];
	$_SESSION['department'] = $row['department'];
	$_SESSION['section'] = $row['section'];
    $_SESSION['session'] = $row['session'];


	 
?>
   
<div class="result">
    <table border="3px">
        <tr>
            <td colspan="1">Fullname: <?php echo $_SESSION['fname']; ?> </td>
            <td colspan="0">Year & section:  <?php echo $_SESSION['section']; ?> </td>
			<td colspan="0">session:  <?php echo $_SESSION['session']; ?></td>
        </tr>
        <tr>
			
            <td colspan="1">Student ID: <?php echo $_SESSION['studentNo']; ?> </td>
            <td colspan="0">Course: <?php echo $_SESSION['department']; ?></td>
			
        </tr>
		
    

<?php 
}
?>
							
							<tr style="background-color: lightgreen; text-align:center;">

								<th >Subject</th>
								<th  style="text-align: center;">Instructor</th>
								<th  style="text-align: center;">Grades</th>
							</tr>

							<tr>

							<?php
require('db_conn.php');

$studentID = $_SESSION['StudentID'];
$studentNo = $_SESSION['studentNo'];

$query_subjects = mysqli_query($conn, "select * from subjects where student_id = '$studentID'");
$query_grading = mysqli_query($conn, "select * from grading where studentNo = '$studentNo'");

while($row_subjects = mysqli_fetch_array($query_subjects) and $row_grading = mysqli_fetch_array($query_grading)) {
	$_SESSION['subject_code'] = $row_subjects['subject_code'];
	$_SESSION['Teacher_Name'] = $row_subjects['Teacher_Name'];
	$_SESSION['Grade'] = $row_grading['Grade'];
?>

	<tr>
		<td style="text-align: center;">  <?php echo $_SESSION['subject_code'];?></td>
		<td style="text-align: center;">  <?php echo $_SESSION['Teacher_Name'];?></td>
		<td style="text-align: center;"><?php echo $_SESSION['Grade'];?></td>					
	</tr>

<?php 
}
?>

<tr style="background-color: lightgreen;">
	<?php
	require('db_conn.php');

	$StudentID = $_SESSION['StudentID'];
	$studentNo = $_SESSION['studentNo'];
	$query = mysqli_query($conn, "SELECT gwa FROM grading WHERE studentNo = '$studentNo'");
	while ($row = mysqli_fetch_array($query)) {
		$_SESSION['gwa'] = $row['gwa'];
	}

	// Compute the remark based on the GWA
	$threshold = 3.5; // Set your threshold here
	if ($_SESSION['gwa'] >= $threshold) {
		$_SESSION['Remark'] = "Fail";
	} else {
		$_SESSION['Remark'] = "Pass";
	}
	?>						
	<td colspan="0"></td>
	<th colspan="1" class="remark"></th>
	<th colspan="1" class="remark">GWA: <?php echo $_SESSION['gwa']; ?></th>
	
</tr>

<tr style="background-color: lightgreen;">
	<td colspan="0"></td>
	<th colspan="1" class="remark"></th>
	<th colspan="1" class="remark">Remark: <?php echo $_SESSION['Remark']; ?></th>
</tr>
						
	

						</table>
					</div>
				</div>
			</div>



<!-- HISTORY       ---------------------------->



			<div class="table-data" id="lastSemester" style="display: none;"> 
				<div class="order">
					<div class="head">
						<h1 class="h1" style="color: red;">My History</h1>
							
					</div>
  

					<?php
require('db_conn.php');

$StudentID = $_SESSION['StudentID'];
$studentNo = $_SESSION['studentNo'];

$query = mysqli_query($conn, "select * from adminstudent where studentNo = '$studentNo'");
while($row = mysqli_fetch_array($query)) {
    $_SESSION['fname'] = $row['fname'];
	$_SESSION['department'] = $row['department'];
	$_SESSION['section'] = $row['section'];
    $_SESSION['session'] = $row['session'];


	 
?>
   
   <div class="result">
    <table border="3px">
        <tr>
            <td colspan="1">Fullname: <?php echo $_SESSION['fname']; ?> </td>
            <td colspan="0">Year and section:  <?php echo $_SESSION['section']; ?> </td>
			<td colspan="0">session:  <?php echo $_SESSION['session']; ?></td>
        </tr>
        <tr>
			
            <td colspan="1">Student ID: <?php echo $_SESSION['studentNo']; ?> </td>
            <td colspan="0">Course : <?php echo $_SESSION['department']; ?></td>
			<td colspan="0"></td>
			<td colspan="0"></td>
        </tr>
		
    
</div>

<?php 
}
?>



								
							<tr style="background-color: lightgreen; text-align:center;">
								<th>Teacher ID</th>
								<th>Subject</th>
								<th>Grades</th>
							</tr>
								  				  
							<tr>
								<td></td>
								<td></td>
								<td></td>

							</tr>	
	

				  
				  			<tr style="background-color: lightgreen;">
							  <?php
require('db_conn.php');

$StudentID = $_SESSION['StudentID'];
$studentNo = $_SESSION['studentNo'];
$query = mysqli_query($conn, "SELECT gwa FROM grading WHERE studentNo = '$studentNo'");
while ($row = mysqli_fetch_array($query)) {
    $_SESSION['gwa'] = $row['gwa'];
}
?>
	
								<td colspan="0"></td>
								<th colspan="1"></th>
								<th colspan="1" class="remark">GWA: </th>
							</tr>	

						</table>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="js/switch.js"></script>
	
</body>
</html>

<?php 
}




else{








	
     header("Location: index.php");
     exit();
}
 ?>