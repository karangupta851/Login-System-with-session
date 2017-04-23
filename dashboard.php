<?php

include("session.php"); //include session.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="CSS/style.css" />
</head>
<body background="image/6276102062_463b9f4822_b.jpg">
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
<table bgcolor="#3399CC"width="1350" class="top-links">
  <tr>
<td width="119" height="32">
<a href="dashboard.php">
<h3>
<font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">Dashboard</font></h3></a></td>
<td width="137">
<a href="adddegree.php">
<h3><font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">Add Degree</font></h3>
</a></td>
<td width="137"><a href="addcourse.php">
  <h3><font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">Add Course</font></h3>
</a></td>
<td width="137">
<a href="subject.php">
<h3><font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">Add Subject</font></h3></a></td>
<td width="167">
<h3>
<a href="show_result.php"><font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">Check Result</font></a></h3></td>
<td width="150">
<a href="subject.php"> 
<h3>
<font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">Add Subject</font></h3></a></td>
<td width="136">
<a href=""> 
<h3>
<font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">Add result</font></h3></a></td>
<td width="35"></td>
<td width="157">
<font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">
<?php echo $_SESSION['email']; ?>!</font></td>
<td width="140">
<a href="logout.php">
<h3><font color="#FFFFFF" style="padding-top: 20px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">Logout</font></h3></a></td></tr>
</table>
</body>
</html>
