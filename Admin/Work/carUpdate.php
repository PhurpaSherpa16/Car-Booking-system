<?php  
include('config.php');
	if(isset($_POST['id'])){
		$carId=$_POST['id'];
		$carBrand=$_POST['brand'];
		$name=$_POST['carname'];
		$cost=$_POST['price'];
		$mile=$_POST['mile'];
		$acc=$_POST['acc'];
		$year=$_POST['year'];
		$carType=$_POST['catogery'];
		$desc=$_POST['desc'];

		$update="update car set brandName='$carBrand', carName='$name', price='$cost', mile='$mile', acc='$acc', year='$year', catogery='$carType',description='$desc' where cid='$carId'";
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