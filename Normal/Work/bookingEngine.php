<?php 	include("config.php");

	if(isset($_POST['submit'])){
		$carid=$_POST['cid'];
		$userid=$_POST['uid'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$register="INSERT INTO bookcar VALUES(null,'$userid','$carid','$email','$phone','$address',CURRENT_DATE)";
		if($connect->query($register)==true){
		$userInfo="SELECT * FROM user WHERE uid='$userid'";
		$userInfo_data=$connect->query($userInfo);
		$data=$userInfo_data->fetch_assoc();
		$to="SasinCarStore@gmail.com";
		$sub="Booking Info.";
		$msg=" Want to book by ".$data['uname'];;
		$headers="From: ".$email;
		mail($to, $sub, $msg,$headers);
		header("location:../");
		}
		else{
			echo("Error :".mysqli_error($connect));
		}

	}
?>
