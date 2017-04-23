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
    if (isset($_REQUEST['name'])){
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$courses_id = stripslashes($_REQUEST['courses_id']);
		$courses_id = mysqli_real_escape_string($con,$courses_id);
        $query = "INSERT into `subjects` (name, courses_id) VALUES ('$name', '$courses_id')";
        $result = $con->query($query);
        if($result){
            echo "<div class='form'><h1>Subject Added successfully.</h1><br/><h1>Click here to</h1> <a href='dashboard.php'><h1>Dashboard</h1></a></div>";
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
<div class="ums_logo">
<img src="image/ums_logo.png" />
</div>
<div class="login_box" style="margin-left: 370px;">
<div class="red_box">
</div>
<div class="sign_in">Registration Form
</div>
<form action="" method="post" name="registration">
<div class="table">
<div id="UpdatePanel1">
  <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
  <tr>
  <td><h3>
  Course</h3>
  </td>
  <td>
  <select name="courses_id" class="select_ums" Required>
    <option>Select Course</option>
    <option value="1">CSE</option>
    <option value="2">CE</option>
    <option value="3">ME</option>
    <option value="4">ECE</option>
  </select>
</td>
    <tr>
      <td height="41"><h3>Subject Name</h3></td>
      <td><input name="name" type="text" class="input_type" id="name" placeholder="Subject Name" required="required" /></td>
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
</body>
</html>