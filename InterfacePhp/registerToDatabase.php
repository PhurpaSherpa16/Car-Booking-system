<?php  
     	 if(isset($_POST['fname'])){
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$uname=$_POST['uname'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$dob=$_POST['dob'];
			$gender=$_POST['gender'];
			registerUser($fname,$lname,$uname,$email,$password,$dob,$gender);
		}
	function  registerUser($fname,$lname,$uname,$email,$password,$dob,$gender){
		include('config.php');
		$register ="INSERT INTO user VALUES (null,'$fname','$lname','$uname','$email','$password','$dob','$gender','normal') ";
		if ($connect->query($register)==false)
 			 {
  			echo("Error description: " . mysqli_error($connect));
  		}
 		else{
 			$msg="Succesfully Register";
 			 header("Location:../index.php?msg=".$msg);
 		}
	}
?>
