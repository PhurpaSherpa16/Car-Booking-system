<?php  include('Work/config.php');
	session_start();
	if (!isset($_SESSION['uid']) && !isset($_SESSION['utype'])) {
	header('location:../../../sasin');
	}
	if ($_SESSION['utype'] != 'normal') {
		header('location:../../../sasin');
	}
	$select=$connect->query("SELECT * FROM car order by cid DESC LIMIT 6");
	$userid=$_SESSION['uid'];
	$userInfo="SELECT * FROM user WHERE uid='$userid'";
		$userInfo_data=$connect->query($userInfo);
		$data=$userInfo_data->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sasin Car Store</title>
	<link rel="stylesheet" href="../Css/boostrap.css">
	<link rel="stylesheet" href="../Css/index.css">
	<link rel="stylesheet" href="../Css/normal.css">
  	<script src="../Css/a.js"></script>
  	<script src="../Css/b.js"></script>
  	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<style>
	#marquee img{
		position: initial;

	}
</style>
<body >
<header>
	<nav class="navbar navbar-inverse" style="border-radius: 0px;">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<a id="ab" class="navbar navbar-brand" href="../Normal"><span style="font-size: 20px; color:  #e8491d">Sasin</span>Online Car Store</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<a id="ab" class="navbar navbar-brand" href="../Normal"><span style="font-size: 20px; color:  #e8491d;"><?php echo $data['fname']." ". $data['lname']." ";?></span>Welcome</a>
			</div>
			</div>
		</div>
	</nav>
</header>
<section style="min-height: 400px;">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="horizontalBar">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:0px; padding: 0px; width: 100%">
			<ul id="hoz" class="nav navbar-nav" style="margin:0px; padding: 0px; width: 100%">
			      <li ><a  id="a" href="Work/BookedCar.php"><span class="glyphicon glyphicon-shopping-cart"></span>Booked Car List</a></li>
			      <li ><a  id="a" href="Work/CarType.php"><span class="glyphicon glyphicon-align-left"></span>Car Catogory</a></li>
			      <li ><a  id="a" href="Work/ProfileUpdate.php"><span class="glyphicon glyphicon-pencil"></span>Profile Update</a></li>
			      <li ><a  id="a" href="Work/forum.php"><span class="glyphicon glyphicon-question-sign"></span>Forum</a></li>
			      <li><a  id="a" href="Work/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
			</ul>
	</div>
</div>			
<div id="body" class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pull-right" style="padding:0px; margin:0px;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:; min-height: 250px; position: initial;padding: 0px; margin: 0px; padding-top: 30px;">
             	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: ; min-height: 100px; position: initial; padding:0px; width: 100%; padding-top: 20px;">
             		<marquee id="marquee" style="position: initial;"><img src="../Images/upload/Aston Martin Vanquish Blue.jpg" alt="" height="150px; " style="position: initial;" ><img src="../Images/upload/Lambo Yellow Van.png" height="150px;"><img src="../Images/upload/Aston Martin Vanquish Blue.jpg" alt="" height="150px;"><img src="../Images/upload/Lambo Yellow Van.png" height="150px;"><img src="../Images/upload/Aston Martin Vanquish Blue.jpg" alt="" height="150px;"><img src="../Images/upload/Lambo Yellow Van.png" height="150px;"><img src="../Images/upload/Aston Martin Vanquish Blue.jpg" alt="" height="150px;"><img src="../Images/upload/Lambo Yellow Van.png" height="150px;"><img src="../Images/upload/Aston Martin Vanquish Blue.jpg" alt="" height="150px;"><img src="../Images/upload/Lambo Yellow Van.png" height="150px;"><img src="../Images/upload/Aston Martin Vanquish Blue.jpg" alt="" height="150px;"><img src="../Images/upload/Lambo Yellow Van.png" height="150px;"></marquee>
             	</div>
             	 <h1 style="text-align: center; color: #e8491d;">Check Out our Most Fuel Efficent Car and latest collection</h1>
             </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: ; min-height: 300px; position: initial; padding:0px;">
             	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: #cfcfd1; min-height: 230px; position: initial; padding:5px; width: 100%">
             		 <?php 
			  if($select==true){
			  while($row=$select->fetch_assoc()){
			    ?>
			     <div id="body2" class="col-lg-4 col-md-4 col-sm-5 col-xs-10"  style="position: initial;">
			        <div class="thumbnail"  style="position: initial;">
			          <img src="../Images/upload/<?php echo $row['image'];?>" alt="lamborgini" style="position: initial; height: 200px;">
			          <div class="caption"  style="position: initial;">
			            <h3  style="position: initial;"><?php echo strtoupper($row['carName']); ?></h3>
			            <a href="Work/CarView.php?cid=<?php echo $row['cid'] ;?>" class="btn btn-primary" role="button"  style="position: initial;">View</a> 
			          </div>
			        </div>
			      </div>
			    <?php
			  }
			  }
			  else{
			  echo"Error on loading".$connect->error;
			  }
			  ?>
             	</div>
             </div>
</div>
</section>
<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 250px; background-color: #272828;">
				<div id="footerbox" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="col-lg-13 col-md-12 col-sm-12 col-xs-12" style="min-height: 220px; background-color: ; padding-top: 5px; padding-bottom: 5px;" >
						 <label style="color: white; font-size: 15px;">Contact us on:</label>
						        <p id="footer">Posated By: Online Shopping group</p>
						        <p id="footer">Email: <a href="https://www.gmail.com" target="_blank" > SasinCarStore@gmail.com</a></p>
						        <p id="footer">Hot-mai:<a href="https://www.gmail.com" target="_blank"> SasinCarStore@hotmail.com</a></p>
						        <p id="footer">Phone number: 98**********</p>
						        <p id="footer">landline number: 01-******</p>
						        <p id="footer">Address:its a online store</p>
					</div>	
				</div>
				<div id="footerbox" class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pull-center" >
					<div class="col-lg-13 col-md-12 col-sm-12 col-xs-12" style="min-height: 220px; background-color: ; padding-top: 5px; padding-bottom: 5px;" >
						<label style="color: white; font-size: 15px;">Map Of Our Store:</label>
						<br><a href="https://www.google.com.np/maps/place/Dillibazar/@27.705404,85.3244805,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19a77f1ab301:0xb213d09ebce4b3da!8m2!3d27.705404!4d85.3266692" target="_blank"><img src="../Images/map.jpg" alt="map" height="180px" width="100%"></a>
					</div>
				</div>
				<div id="footerbox" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
					<div class="col-lg-13 col-md-12 col-sm-12 col-xs-12" style="min-height: 220px; background-color:  ; padding-top: 5px; padding-bottom: 5px;" >
						<label style="color: white; font-size: 15px;">Follow Us on:</label>
						<br>
						<div id="follow" class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="min-height: 70px; background-color: ; border-bottom: 2px solid red;"><a href="https://www.facebook.com" target="_blank"><img src="../Images/fb.png" alt="facebook"></a> </div>
						<div  id="follow"  class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="min-height: 70px; background-color: ; border-bottom: 2px solid green">
							<a href="https://www.googleplus.com/" target="_blank"><img src="../Images/google+.png" alt="google plus"></a>  </div>
						<div  id="follow"  class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="min-height: 70px; background-color: ;border-bottom: 2px solid yellow "><a href="https://www.twitter.com/" target="_blank"><img src="../Images/tw.png" alt="twitter"></a>  </div>
						<div  id="follow" class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="min-height: 70px; background-color: ; border-bottom: 2px solid blue"><a href="https://www.blogger.com/" target="_blank"><img src="../Images/blo.png" alt="blogger"></a>  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>