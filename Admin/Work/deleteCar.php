<?php
	include('config.php');
	if(isset($_GET['cid'])){
		$id=$_GET['cid'];
		$delete="DELETE FROM car WHERE cid='$id'";
		$connect->query($delete);
		header('location:../'); 
	}
?>