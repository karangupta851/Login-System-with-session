
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRAMIET | University Management System</title>
<link rel="icon" href="image/logo3.png" type="image/png">
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
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
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
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
<div class="C:\Users\Karan Gupta\Desktop\image\logo3.png">
</div>
 <div class="login_box" style="margin-left: 370px;">
            <div class="red_box">
            </div>
            <div class="sign_in">
                Sign In          </div>  
				<div class="table">
                
                <div id="UpdatePanel1">
	
                        <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
                            <tr>
                                <td>
                                    <input name="email" type="text" id="TextBox1" class="input_type" placeholder="User ID" required/>
                                </td>
                                <td>
                                    <input name="password" type="password" id="TextBox2" class="input_type_pass" placeholder="Password" required />
                                </td>
                            </tr>
                            <tr>
                                
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                              </td>
                            </tr>
                        </table>
				  </div>
		 </div>
<div class="login_button">
 <input type="image" name="submit" id="submit" src="image/login-button-png-0.png" alt="submit" style="height:73px;width:73px;border-width:0px; " />
            </div>
 <div class="forget_password">
                <a href="">
                    <img src="image/f_p.png" width="101" height="48" alt="staff" style="margin-bottom: 6px;margin-left: -2px;"/></a></div>
</div>
</body>
</html>
