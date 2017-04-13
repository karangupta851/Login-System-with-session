<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRAMIET | University Management System</title>
<link rel="icon" href="image/logo3.png" type="image/png">
<link rel="stylesheet" href="CSS/style.css" />
</head>
<body background="image/518164-backgrounds.jpg">
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			header("Location: dashboard.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
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
<div class="sign_in">Sign In
</div>
<form action="" method="post" name="login">
<div class="table">

 <div id="UpdatePanel1">
 
  <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
  <tr>
  <td>
<input name="email" type="text" class="input_type" id="email" placeholder="Username" required /></td>
<td>
<input type="password" name="password" placeholder="Password" class="input_type_pass" required /></td></tr>
<td>
<div class="login_button">
<input type="image" name="submit" id="submit" src="image/login-button-png-0.png" alt="submit" style="height:73px;width:73px;border-width:0px; " /></td></tr>
<tr>
  <td>Not registered yet?<a href="registertype.php"> Register Here</a></td>
</tr>
</table>
</form>
</div>
<?php } ?>
</body>
</html>