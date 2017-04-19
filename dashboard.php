<?php

include("session.php"); //include session.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="main_div_mid">
<p>Welcome <?php echo $_SESSION['email']; ?>!</p>
<p>Dashboard</p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
