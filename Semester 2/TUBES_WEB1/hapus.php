<?php 

session_start();

if( !isset($_SESSION["log"]) ) {
	header("Location: login.php");
	exit;
}

require('functions.php');

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	header("Location: index1.php");
}
else {
	$_SESSION['message'] = "SORRY! ERROR while deleting record !";
	$_SESSION['msg_type'] = "danger";
	header("Location: index1.php");
}

?>