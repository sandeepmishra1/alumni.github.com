<?php
$dbhost="localhost";
$dbuser="root";
$password="";
$dbname="departmentdb";
$conn = mysqli_connect($dbhost,$dbuser,$password,$dbname);
if (!$conn) {
	die("connection failed");

}
?>