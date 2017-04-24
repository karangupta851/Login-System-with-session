<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
<?php
	require('db.php');
    $getStudents = "select * from users where roles_id=3";
    $result = $con->query($getStudents);
    printf("%s\n", $con->error);
    $rows = $result->fetch_array();
    $len = count($rows);
    echo "<pre>";
    $students = [];
    for ($i=0; $i < $len; $i++) { 
      $row = $result->fetch_array(MYSQLI_ASSOC);
      if($row)
        $students[] = $row;
    }
    // print_r($students);
    // die;
    // If form submitted, insert values into the database.
    if (isset($_POST) && !empty($_POST)){
      print_r($_POST);
		// $student_id = stripslashes($_REQUEST['student_id']); // removes backslashes
		// $student_id = mysqli_real_escape_string($con,$student_id); //escapes special characters in a string
		$subjects_id = stripslashes($_REQUEST['subjects_id']);
		$subjects_id = mysqli_real_escape_string($con,$subjects_id);
		$classes_delivered = stripslashes($_REQUEST['classes_delivered']);
		$classes_delivered = mysqli_real_escape_string($con,$classes_delivered);
		$classes_attended = stripslashes($_REQUEST['classes_attended']);
		$classes_attended = mysqli_real_escape_string($con,$classes_attended);
    $query = "";
    // print_r($_POST['student']);
    foreach ($_POST['student'] as $key => $s) {
      // echo $s;
      $query .= "INSERT into `student_attendance` (student_id, subjects_id, classes_delivered, classes_attended) VALUES ('$s', '$subjects_id', '$classes_delivered', '$classes_attended');";
    }
      if ($con->multi_query($query) === TRUE) {
          echo "New records created successfully</h3><br/>Click here to <a href='dashboard.php'>Dashboard</a>";
      } else {
          echo "Error: " . $query . "<br>" . $con->error;
      }
        // $result = $con->query($query);
        // if($result){
        //     echo "<div class='form'><h3>course registered successfully.</h3><br/>Click here to <a href='dashboard.php'>Dashboard</a></div>";
        // }else{
        //     //this will show you the error 
        //     printf("%s\n", $con->error);
        //     exit();
        // }
    }else{
?>
<div id="main">
</div>
<div class="main_div_mid">
</div>
<div class="main_div_left">
</div>
<div class="logo">
<img src="image/logo3.png" />
</div>
<div class="ums_logo">
<img src="image/ums_logo.png" />
</div>
<div class="login_box" style="margin-left: 370px;">
<div class="red_box">
</div>
<div class="sign_in">Show Result
</div>
<form action="" method="post" name="registration">
<div class="table">
<div id="UpdatePanel1">
  <table>
  <?php	
$sql="SELECT first_name,id FROM users"; 
$sql="SELECT first_name,id FROM users order by name"; 
echo "<select name=student value='' roles_id='3'>Student Name</option>"; 
foreach ($dbo->query($sql) as $row){//Array or records stored in $row
echo "<option value=$student[id]>$first_name[first_name]</option>"; 
}
 echo "</select>";
 ?>
</table>
</div>
</div>
</form></div>
<?php } ?>
</body>
</html>
