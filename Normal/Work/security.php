<?php  include('config.php');
	session_start();
	if (!isset($_SESSION['uid']) && !isset($_SESSION['utype'])) {
	header('location:../../index.php');
	}
	if ($_SESSION['utype'] != 'normal') {
		header('location:../../index.php');
	}
?>