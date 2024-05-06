<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['student_id'])) {

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Student</title>
</head>

<body>
    
    <div class="side-menu">
        <li></li>
        <div class="brand-name">
            <h1></h1>
            <img src="img/cdmlogo.jpg" style="width: 35%; border-radius: 50%;">
        </div>
        <ul>
            <li></li>
            <li></li>
            <li><img src="img/dashboard (2).png">&nbsp; <span>Dashboard</span> </li>
            <li><a href="viewing.php"><img src="img/reading-book (1).png" alt="">&nbsp;<span> View Grade </span> </li></a>
            <li><img src="img/teacher2.png" alt="">&nbsp;<span>History</span> </li>


        </ul>
    </div>
    <div class="container">
        <div class="content">
            <div class="header">
                <div class="btn-link">
                    <?php echo $_SESSION['name']; ?>
                    <a class="btn" href="logout.php">Logout</a>
                </div>
            </div>
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            <h1>2194</h1>
                            <h3>Students</h3>
                        </div>
                        <div class="icon-case">
                            <img src="img/students.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>53</h1>
                            <h3>Grades</h3>
                        </div>

                     </div>
                    <div class="card">
                        <div class="box">
                             <h1>5</h1>
                            <h3>History</h3>
                        </div>
                        <div class="icon-case">
                            <img src="img/schools.png" alt="">
                        </div>
                    </div>

                    </div>
                
            </div>
        </div>
    </div>
</body>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>