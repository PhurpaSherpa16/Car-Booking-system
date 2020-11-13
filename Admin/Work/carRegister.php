<?php  include('security.php');
?>
<?php
	include('config.php');
	if (isset($_POST['submit'])) {
	$carbrand=$_POST['brand'];
	$carname=$_POST['carname'];
	$price=$_POST['price'];
	$mile=$_POST['mile'];
	$acc=$_POST['acc'];
	$year=$_POST['year'];
	$catogery=$_POST['catogery'];
	$cardesc=$_POST['desc'];

	$imageFileType = pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION);
		$imgname=$carname.".".$imageFileType;
		$upload= "../../Images/upload/".$imgname;
	move_uploaded_file($_FILES["image"]["tmp_name"],$upload);

	$register="INSERT INTO car VALUES (NULL, '$carbrand','$carname','$price','$mile','$acc','$year','$catogery','$cardesc','$imgname')";

	if($connect->query($register)===TRUE){
		?>
	<script type="text/javascript">
		alert("Succesfully Inserted");
	</script>
	<?php
	header("location:../../Admin");
	}
	else{
		echo"Error on loading".$connect->error;
	}
	}
	
?>
