<?php include('config.php');
session_start();
if (!isset($_SESSION['uid']) && !isset($_SESSION['utype'])) {
	header('location:../../../../sasin');
	}
	if ($_SESSION['utype'] != 'normal') {
		header('location:../../../../sasin');
	}
	if(isset($_GET['cid'])){
	$id=$_GET['cid'];
	//echo  $id;
	$uid=$_SESSION['uid'];
	$userInfo="SELECT * FROM user WHERE uid='$uid'";
		$userInfo_data=$connect->query($userInfo);
		$data=$userInfo_data->fetch_assoc();
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
	 <link rel="stylesheet" href="../../Css/register.css">
  	<script src="../../Css/a.js"></script>
  	<script src="../../Css/b.js"></script>
  	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<style>
	.form-horizontal{
		        -webkit-box-shadow: -3px 4px 30px -1px rgba(0,0,0,1);
		                -moz-box-shadow: -3px 4px 30px -1px rgba(0,0,0,1);
		                box-shadow: -3px 4px 30px -1px rgba(0,0,0,1);
		                    margin-top: 10px;
		                    padding-top: 10px;
		                    margin-bottom: 10px;	
   	}
	#body #body2 label{
		position: initial;
		text-align: left;
	}
	#body #body2 div,#body #body2 div input[type="text"],#body #body2 div input[type="password"],#body #body2 div input[type="email"],#body #body2 div input[type="radio"]{
		position: initial;

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

<div id="body" class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pull-right">
	<form id="body2" class="form-horizontal" role="form" method="post" action="bookingEngine.php" style="background-color: #272828;">
                <h2 style="color: white;">Booking Form</h2>
                 <div class="form-group">
                     <label for="firstName" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" name="cid" hidden value="<?php echo $id ;?>">
                        <input type="text" name="uid" hidden value="<?php echo $uid;?>">
                        <input type="text"  name="email" value="<?php echo $data['email'];?>"  class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                   <label for="firstName" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text"  name="address" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                     <label for="userName" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone" class="form-control" required autofocus autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" id="register" name="submit" class="btn btn-primary btn-block">Book</button>
                    </div>
                </div>
            </form>
</div>
</section>
	<?php include("footer.php");?>
</body>
</html>