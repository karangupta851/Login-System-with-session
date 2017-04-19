<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRAMIET | University Management System</title>
<link rel="icon" href="image/logo3.png" type="image/png">
<link rel="stylesheet" href="CSS/style.css" />
</head>
<body background="image/main-background1.jpg">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['email'])){
		$first_name = stripslashes($_REQUEST['first_name']); // removes backslashes
		$first_name = mysqli_real_escape_string($con,$first_name); //escapes special characters in a string
		$last_name = stripslashes($_REQUEST['last_name']);
		$last_name = mysqli_real_escape_string($con,$last_name);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$dob = stripslashes($_REQUEST['dob']);
		$dob = mysqli_real_escape_string($con,$dob);
		$gender = stripslashes($_REQUEST['gender']);
		$gender = mysqli_real_escape_string($con,$gender);
		$mobile = stripslashes($_REQUEST['mobile']);
		$mobile = mysqli_real_escape_string($con,$mobile);
		$adhaar_no = stripslashes($_REQUEST['adhaar_no']);
		$adhaar_no = mysqli_real_escape_string($con,$adhaar_no);
		$address = stripslashes($_REQUEST['address']);
		$address = mysqli_real_escape_string($con,$address);
	    	$salary = stripslashes($_REQUEST['salary']);
		$salary = mysqli_real_escape_string($con,$salary);
        $query = "INSERT into `users` (first_name, last_name, password, email, address, adhaar_no, mobile, gender, dob, salary) VALUES ('$first_name', 'last_name', '".md5($password)."', '$email', '$address', '$adhaar_no', '$mobile', '$gender', '$dob', '$salary')";
        $result = $con->query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
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
<div class="sign_in">Registration Form
</div>
<form action="" method="post" name="registration">
<div class="table">
<div id="UpdatePanel1">
  <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
    <tr>
      <td height="41"><h3>First Name</h3></td>
      <td><input type="text" name="first_name" placeholder="First Name" class="input_type" required="required" /></td>
    </tr>
    <tr>
      <td height="41"><h3>Last Name</h3></td>
      <td><input type="text" name="last_name" placeholder="Last Name" class="input_type" required="required" /></td>
    </tr>
    <tr>
      <td height="41"><h3>Date Of Birth</h3></td>
      <td>
      <input type="date" name="dob" required />
	    </td>
    </tr>
    <tr>
      <td><h3>Gender</h3></td>
      <th><input name="gender" type="radio" value="Male" />
        Male
        <input name="gender" type="radio" value="Female" />
        Female</th>
    </tr>
    <tr>
      <td><h3>E-mail</h3></td>
      <td><input type="text" name="email" placeholder="E-mail" class="input_type" required="required" /></td>
    </tr>
    <tr>
      <td><h3>Password</h3></td>
      <td><input type="password" name="password" placeholder="Password" class="input_type_pass" required /></td>
    </tr>
    <tr>
      <td><h3>Mobile</h3></td>
      <td><input type="text" name="mobile" placeholder="Phone No." class="input_type" required="required" /></td>
    </tr>
    <tr>
      <td><h3>Adhaar No.</h3></td>
      <td><input type="text" name="adhaar_no" placeholder="Adhaar No." class="input_type" required="required" /></td>
    </tr>
    <tr>
      <td><h3>Address</h3></td>
      <td><textarea name="address" cols="" rows="" class="input_type" required placeholder="Address"></textarea></td>
    </tr>
	<tr>
      <td><h3>Salary</h3></td>
      <td><input type="text" name="salary" placeholder="Salary" class="input_type" required /></td>
    </tr><tr>
  <td><div class="login_button">
    <input type="image" name="register" id="register" src="image/Register-Button-PNG-Free-Download.png" alt="register" style="height:80px;width:130px;border-width:0px; " />
  </div></td>
  </tr>
  </table>
  </div>
</div>
</form></div>
<?php } ?>
</body>
</html>
