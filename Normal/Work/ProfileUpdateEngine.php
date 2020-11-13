<?php	include('config.php');
	if(isset($_POST['submit'])){
		$uid=$_POST['id'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$uname=$_POST['uname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$update="update user set fname='$fname', lname='$lname', uname='$uname', email='$email', password='$password', dob='$dob', gender='$gender' where uid='$uid'";
		$data=$connect->query($update);
		if($data===TRUE){
		$msg='succefully update';
		header("location:../");
		}
		else{
			echo"Error on loading".$connect->error;
		}
		}
?>