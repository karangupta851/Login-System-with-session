<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRAMIET | University Management System</title>
<link rel="icon" href="image/logo3.png" type="image/png">
<link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['max_marks'])){
		$max_marks = stripslashes($_REQUEST['max_marks']); // removes backslashes
		$max_marks = mysqli_real_escape_string($con,$max_marks); //escapes special characters in a string
		$subjects_id = stripslashes($_REQUEST['subjects_id']);
		$subjects_id = mysqli_real_escape_string($con,$subjects_id);
		$exams_id = stripslashes($_REQUEST['exams_id']);
		$exams_id = mysqli_real_escape_string($con,$exams_id);
        $query = "INSERT into `exam_subjects` (max_marks, subjects_id, exams_id) VALUES ('$max_marks', '$subjects_id', '$exams_id')";
        $result = $con->query($query);
        if($result){
            echo "<div class='form'><h1>Exam Subject are added successfully.</h1><br/><h1>Click here to</h1> <a href='dashboard.php'><h1>Dashboard</h1></a></div>";
        }else{
            //this will show you the error 
            printf("%s\n", $con->error);
            exit();
        }
    }else{
?>
<div class="logo">
<img src="image/logo3.png" />
</div>
<div class="login_box" style="margin-left: 370px;">
<div class="red_box">
</div>
<div class="sign_in">Exam Subject
</div>
<form action="" method="post" name="registration">
<div class="table">
<div id="UpdatePanel1">
  <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
    <tr>
      <td height="41"><h3>Exam Name</h3></td>
      <td><select name="exams_id" class="select_ums">
        <option>Select Exam</option>
        <option value="1">Ist Sessional</option>
        <option value="2">2nd Sessional</option>
        <option value="3">Final Exam</option>
      </select></td>
    </tr>
    <tr>
      <td height="41"><h3>Subject Name</h3></td>
      <td><select name="subjects_id" class="select_ums">
        <option>Select Subject</option>
        <option value="1">Math-I</option>
        <option value="2">Chemistry</option>
        <option value="3">Physics</option>
        <option value="4">C++</option>
        <option value="5">Java</option>
        <option value="6">Computer Graphics</option>
        <option value="7">AutoCad</option>
      </select>      </td>
    </tr>
    <tr>
      <td><h3>Max. Marks </h3></td>
      <td><input type="text" name="max_marks" placeholder="Max. Marks" class="input_type" required="required" /></td>
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
