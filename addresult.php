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
    if (isset($_REQUEST['total_marks'])){
		$student_id = stripslashes($_REQUEST['student_id']); // removes backslashes
		$student_id = mysqli_real_escape_string($con,$student_id); //escapes special characters in a string
		$exams_id = stripslashes($_REQUEST['exams_id']);
		$exams_id = mysqli_real_escape_string($con,$exams_id);
		$total_marks = stripslashes($_REQUEST['total_marks']);
		$total_marks = mysqli_real_escape_string($con,$total_marks);
		$scored_marks = stripslashes($_REQUEST['scored_marks']);
		$scored_marks = mysqli_real_escape_string($con,$scored_marks);
        $query = "INSERT into `student_result_overview` (student_id, exams_id, total_marks, scored_marks) VALUES ('$student_id', '$exams_id', '$total_marks', '$scored_marks')";
        $result = $con->query($query);
        if($result){
            echo "<div class='form'><h2>Result added successfully.</h2><br/><h2>Click here to </h2><a href='dashboard.php'><h2>Dashboard</h2></a></div>";
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
      <td height="41"><h3>Student</h3></td>
      <td><select name="student_id" class="select_ums" id="student_id">
        <option>Select</option>
        <option value="1">Tarun Gupta</option>
        <option value="4">Tarun Gupta</option>
        <option value="10">Karan</option>
        <option value="16">Nitin</option>
        <option value="17">Firoz</option>
                  </select>      </td>
    </tr>
    <tr>
      <td height="41"><h3>Semester</h3></td>
      <td><select name="exams_id" class="select_ums">
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>
      </select>
      </td>
    </tr>
    <tr>
      <td height="41"><h3>Total Marks </h3></td>
      <td><input name="total_marks" type="text" class="input_type" id="name" placeholder="Class Delivered" required="required" /></td>
    </tr>
	<tr>
      <td height="41"><h3>Marks Obtain </h3></td>
      <td><input name="scored_marks" type="text" class="input_type" id="name" placeholder="Class Attended" required="required" /></td>
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
