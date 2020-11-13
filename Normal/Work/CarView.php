<?php  include('config.php');
  session_start();
  if (!isset($_SESSION['uid']) && !isset($_SESSION['utype'])) {
  header('location:../../../../sasin');
  }
  if ($_SESSION['utype'] != 'normal') {
    header('location:../../../../sasin');
  }

  if(isset($_GET['cid'])){
        $id=$_GET['cid'];
        $select="SELECT * FROM car where cid='$id'";
        $select_check=$connect->query($select);
        $data=$select_check->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sasin Car Store</title>
	<link rel="stylesheet" href="../../Css/boostrap.css">
	<link rel="stylesheet" href="../../Css/index.css">
	<link rel="stylesheet" href="../../Css/Adminindex.css">
  	<script src="../../Css/a.js"></script>
  	<script src="../../Css/b.js"></script>
  	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<style>
	#book{
		width: 120px;
		background-color: #e8491d;
		border: none;
		border-radius: 0px;
	}
	#book:hover{
		color: #e8491d;
		background-color: #272828;
	}
</style>
<body >
<header>
	<nav class="navbar navbar-inverse" style="border-radius: 0px;">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<a id="ab" class="navbar navbar-brand" href="../../Normal"><span style="font-size: 20px; color:  #e8491d">Sasin</span>Online Car Store</a>
			</div>
			</div>
		</div>
	</nav>
</header>
<section style="min-height: 400px;">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="horizontalBar">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:0px; padding: 0px; width: 100%">
			<ul id="hoz" class="nav navbar-nav" style="margin:0px; padding: 0px; width: 100%">
			      <li ><a  id="a" href="BookedCar.php"><span class="glyphicon glyphicon-shopping-cart"></span>Booked Car List</a></li>
			      <li ><a  id="a" href="CarType.php"><span class="glyphicon glyphicon-align-left"></span>Car Catogory</a></li>
			      <li ><a  id="a" href="ProfileUpdate.php"><span class="glyphicon glyphicon-pencil"></span>Profile Update</a></li>
                    <li ><a  id="a" href="forum.php"><span class="glyphicon glyphicon-question-sign"></span>Forum</a></li>
			      <li><a  id="a" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
			</ul>
	</div>
</div>

<div id="body" class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pull-right" >
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: ; min-height: 450px; position: initial; padding:15px;">
             	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: #cfcfd1; height: 400px; position: initial; padding:10px; width: 100%">
             		<img src="../../Images/upload/<?php echo $data['image'];?>" alt="Images of car" height="380px;" width="100%">
             	</div>
             </div>

             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right" style="background-color: ; min-height: 200px; position: initial; padding:15px; padding-left: 5px;">
             	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: #cfcfd1; min-height: 400px; position: initial; padding:10px; width: 100%">
             		<label style="width: 150px; font-size: 17px;">Brand Name</label><?php echo ": ".strtoupper($data['brandName']);?><br>
             		<label style="width: 150px; font-size: 17px;">Car Name</label><?php echo ": ".$data['carName'];?><br>
             		<label style="width: 150px; font-size: 17px;">Price in Lakh</label><?php echo ": ".$data['price'];?><br>
             		<label style="width: 150px; font-size: 17px;">Mile/hrs</label><?php echo ": ".$data['mile'];?><br>
             		<label style="width: 150px; font-size: 17px;">Acceleration in sec</label><?php echo ": ".$data['acc'];?><br>
             		<label style="width: 150px; font-size: 17px;">Manufacture in Year</label><?php echo ": ".$data['year'];?><br>
             		<label style="width: 150px; font-size: 17px;">Catogery</label><?php echo ": ".$data['catogery'];?><br>
             		<label style="width: 150px; font-size: 17px;">Description</label><?php echo ": ".$data['description'];?><br>
             		 <a id="book" href="booking.php?cid=<?php echo $data['cid'] ;?>" class="btn btn-primary" role="button"  style="position: initial;">Book</a>  
             	</div>
             </div>
</div>
</section>
	<?php include("footer.php");?>
</body>
</html>