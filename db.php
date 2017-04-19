<?php
$host = getenv('host');
$port = getenv('port');
$username = getenv('username');
$password = getenv('password');
$database = getenv('database');
$con = new mysqli($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
