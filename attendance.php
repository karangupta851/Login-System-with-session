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
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['student_id'])){
		$student_id = stripslashes($_REQUEST['student_id']); // removes backslashes
		$student_id = mysqli_real_escape_string($con,$student_id); //escapes special characters in a string
		$subjects_id = stripslashes($_REQUEST['subjects_id']);
		$subjects_id = mysqli_real_escape_string($con,$subjects_id);
		$classes_delivered = stripslashes($_REQUEST['classes_delivered']);
		$classes_delivered = mysqli_real_escape_string($con,$classes_delivered);
		$classes_attended = stripslashes($_REQUEST['classes_attended']);
		$classes_attended = mysqli_real_escape_string($con,$classes_attended);
        $query = "INSERT into `student_attendance` (student_id, subjects_id, classes_delivered, classes_attended) VALUES ('$student_id', '$subjects_id', '$classes_delivered', '$classes_attended')";
        $result = $con->query($query);
        if($result){
            echo "<div class='form'><h3>course registered successfully.</h3><br/>Click here to <a href='dashboard.php'>Dashboard</a></div>";
        }else{
            //this will show you the error 
            printf("%s\n", $con->error);
            exit();
        }
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
<div class="sign_in">Attendence
</div>
<form action="" method="post" name="registration">
<div class="table">
<div id="UpdatePanel1">
  <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
  <tr>
      <td height="41"><h3>Student Roll No. </h3></td>
      <td><input name="student_id" type="text" class="input_type" id="name" placeholder="Student Name" required="required" /></td>
    </tr>
    <tr>
      <td height="41"><h3>Subject Name</h3></td>
      <td><select name="subjects_id" class="select_ums" id="subjects_id">
        <option>Selcet Subject</option>
        <option value="1">Math-I</option>
        <option value="2">Chemistry</option>
        <option value="3">Physics</option>
        <option value="4">C++</option>
        <option value="5">Computer Graphics</option>
        <option value="6">AutoCad</option>
      </select></td>
    </tr>
    <tr>
      <td height="41"><h3>Class Delivered </h3></td>
      <td><input name="classes_delivered" type="text" class="input_type" id="name" placeholder="Class Delivered" required="required" /></td>
    </tr>
	<tr>
      <td height="41"><h3>Class Attended </h3></td>
      <td><input name="classes_attended" type="text" class="input_type" id="name" placeholder="Class Attended" required="required" /></td>
    </tr>
	  <tr>
  <td><div class="login_button">
    <input type="image" name="register" id="register" src="add-button-blue-hi.png" alt="register" style="height:80px;width:130px;border-width:0px; " />
  </div></td>
  </tr>
  </table>
  </div>
</div>
</form></div>
<?php } ?>
</body>
</html>
