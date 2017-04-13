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
    if (isset($_REQUEST['first_name'])){
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
		$current_semester = stripslashes($_REQUEST['current_semester']);
		$current_semester = mysqli_real_escape_string($con,$current_semester);
		$current_rollno = stripslashes($_REQUEST['current_rollno']);
		$current_rollno = mysqli_real_escape_string($con,$current_rollno);
		$university_rollno = stripslashes($_REQUEST['university_rollno']);
		$university_rollno = mysqli_real_escape_string($con,$university_rollno);
        $query = "INSERT into `users` (first_name, last_name, password, email, university_rollno, current_rollno, current_semester, address, adhaar_no, mobile, gender, dob) VALUES ('$first_name', '$last_name', '".md5($password)."', '$email', '$university_rollno', '$current_rollno', '$current_semester', '$address', '$adhaar_no', '$mobile', '$gender', '$dob',  )";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
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
      <td><select size="1" name="dob" value="date" class="select_ums" required>
          <option>Date</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>
          <select size="1" name="dob" value="month" class="select_ums" required>
            <option>Month</option>
            <option>Jan</option>
            <option>Feb</option>
            <option>Mar</option>
            <option>Apr</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>Aug</option>
            <option>Sep</option>
            <option>Oct</option>
            <option>Nov</option>
            <option>Dec</option>
          </select>
          <select size="1" name="dob" value="Year" class="select_ums" required>
            <option>Year</option>
            <option>1980</option>
            <option>1981</option>
            <option>1982</option>
            <option>1982</option>
            <option>1983</option>
            <option>1984</option>
            <option>1985</option>
            <option>1986</option>
            <option>1987</option>
            <option>1988</option>
            <option>1989</option>
            <option>1990</option>
            <option>1991</option>
            <option>1992</option>
            <option>1993</option>
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
            <option>1997</option>
            <option>1998</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2006</option>
            <option>2007</option>
            <option>2008</option>
            <option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
        </select></td>
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
      <td><input type="email" name="email" placeholder="E-mail" class="input_type" required="required" /></td>
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
      <td><h3>Current Roll No.</h3></td>
      <td><input type="text" name="current_rollno" placeholder="Current Roll No." class="input_type" required /></td>
    </tr>
    <tr>
      <td><h3>University Roll No.</h3></td>
      <td><input type="text" name="university_rollno" placeholder="University Roll no." class="input_type" required="required" /></td>
    </tr>
    <tr>
      <td><h3>Current Semester</h3></td>
      <td><select name="current_semester" class="select_ums" id="current_semester" required>
          <option>Select Semester</option>
          <option>I</option>
          <option>II</option>
          <option>III</option>
          <option>IV</option>
          <option>V</option>
          <option>VI</option>
          <option>VII</option>
          <option>VIII</option>
        </select>
      </td>
    </tr>
  <td><div class="login_button">
    <input type="image" name="submit" id="submit" src="image/Register-Button-PNG-Free-Download.png" alt="submit" style="height:80px;width:130px;border-width:0px; " />
  </div></td>
  </tr>
  </table>
  </div>
</div>
<?php } ?>
</form>
</body>
</html>
