<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['student_id'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/view.css">
  <title>RESULT</title>
</head>
  <body>
    <nav>
      <a href=""><button class="btn" name="btn">Back</button></a>
    </nav>
    <div class="container">
      <h1 class="h1">RESULT THIS SEMESTER</h1>
        <p class="h1">1st year</p>
        <table border="3px">
          <tr>
            <td colspan="4">Fullname: </td>
            
          </tr>
            

          <tr>
            <td colspan="4">Student ID: </td>
          </tr>

          <tr>
            <td colspan="2">Year and Section:</td>
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
            <td></td>
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
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>