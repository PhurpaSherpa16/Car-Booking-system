<?php  include('config.php');
	session_start();
	if (!isset($_SESSION['uid']) && !isset($_SESSION['utype'])) {
	header('location:../../../../sasin');
	}
	if ($_SESSION['utype'] != 'normal') {
		header('location:../../../../sasin');
	}
	$select ="SELECT b.*, c.*, u.uid FROM bookcar b, car c, user u WHERE b.userid=u.uid AND b.carid=c.cid ";
	$data=$connect->query($select);
	$count=mysqli_num_rows($data);
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
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: ; min-height: 450px; position: initial; padding:15px;">
             	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #cfcfd1; height: 400px; position: initial; padding:10px; width: 100%">
             		<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Car Name</th>
			        <th>Price</th>
			        <th>Date</th>
			        <th>Phone No.</th>
			        <th>Email</th>
			        <th>Cancel</th>
			      </tr>
			    </thead>
			<?php  if($count<=0){
				?>
				<tbody>
					<tr>
						<td colspan="6"><h1 style="text-align: center; color: #e8491d">Sorry, No Booking Available!!!</h1></td>
					</tr>
				</tbody>
			<?php 
			}
			?>
			<?php 
			if($data==true){
				while($row=$data->fetch_assoc()){
					?>
					 <tbody>
					      <tr>
					        <td><img src="../../Images/upload/<?php echo $row['image'];?>" height="100px" width="150px"></td>
					        <td><?php echo $row['carName'];?></td>
					        <td><?php echo $row['price'];?></td>
					        <td><?php echo $row['date'];?></td>
					        <td><?php echo $row['mobileno'];?></td>
					        <td><?php echo $row['email'];?></td>
					        <td><a href="cancel.php?bid=<?php echo $row['bookid'];?>" onclick="javascript:return confirm('Are you sure you want to Cancel this?')">Cancel</a></td>
					      </tr>
					    </tbody>
					<?php  
					}
					}
					?>	
			  </table>
             	</div>
             </div>
</div>
</section>
	<?php include("footer.php");?>
</body>
</html>