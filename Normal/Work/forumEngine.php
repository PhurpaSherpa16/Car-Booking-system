<?php include("config.php");
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$question=$_POST['question'];
		$ask=$_POST['ask'];
		$register="INSERT INTO queries VALUES(null,'$id','$question','$ask',CURRENT_DATE)";
		if($connect->query($register)==true){
			header('location:../');
		}
		else{
			echo("Error :".mysqli_error($connect));
		}
	}
 ?>