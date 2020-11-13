<?php  include('config.php');
  session_start();
  if (!isset($_SESSION['uid']) && !isset($_SESSION['utype'])) {
  header('location:../../../../sasin');
  }
  if ($_SESSION['utype'] != 'normal') {
    header('location:../../../../sasin');
  }

  if(isset($_GET['name'])){
        $n=$_GET['name'];
        $select="SELECT * FROM car where brandName='$n'";
        $data=$connect->query($select);
        $count=mysqli_num_rows($data);
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
	#body2{
		height: 330px;
	}
	#body img{
		height: 180px;
	}
	#body a{
		background-color: #e8491d;
		border: none;
	}
	#body a:hover{
		background-color: #272828;
		border: none;
		color: #e8491d;
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

<div id="body" class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pull-right" style="padding: 20px;">
              <?php 
    if($count<=0){
    ?>
    <h1 style="text-align: center; color: #e8491d">Sorry, No Car Available!!!</h1>
    <?php
  }
    ?>
    <?php 
  if($data==true){
  while($row=$data->fetch_assoc()){
    ?>
     <div id="body2" class="col-lg-4 col-md-4 col-sm-5 col-xs-10"  style="position: initial;">
        <div class="thumbnail"  style="position: initial;">
          <img src="../../Images/upload/<?php echo $row['image'];?>" alt="lamborgini" style="position: initial;">
          <div class="caption"  style="position: initial;">
            <h3  style="position: initial;"><?php echo strtoupper($row['carName']); ?></h3>
            <a href="CarView.php?cid=<?php echo $row['cid'] ;?>" class="btn btn-primary" role="button"  style="position: initial;">View</a> 
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
</section>
	<?php include("footer.php");?>
</body>
</html>