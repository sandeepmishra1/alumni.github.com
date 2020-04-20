<?php
session_start();
if(isset($_SESSION['useremail'])) {
	session_unset();
	session_destroy();
	header('location:index.php');
	# code...
}
?>