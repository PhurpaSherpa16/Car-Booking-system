<?php 	include('config.php');
	if(isset($_GET['bid'])){
		$bookid=$_GET['bid'];
		$delete="DELETE FROM bookcar WHERE bookid='$bookid'";
		$connect->query($delete);
		header('location:BookedCar.php');
	}
?>