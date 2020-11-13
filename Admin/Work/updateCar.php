<?php  include('security.php');
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
				<a id="ab" class="navbar navbar-brand" href="../../Admin"><span style="font-size: 20px; color:  #e8491d">Sasin</span>Online Car Store</a>
			</div>
			</div>
		</div>
	</nav>
</header>
<section style="min-height: 400px;">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="horizontalBar">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:0px; padding: 0px; width: 100%">
			<ul id="hoz" class="nav navbar-nav" style="margin:0px; padding: 0px; width: 100%">
			      <li ><a  id="a" href="../Work/AddCar.php"><span class="glyphicon glyphicon-plus"></span>Add Car  </a></li>
			      <li ><a  id="a" href="../Work/UpdateCar.php"><span class="glyphicon glyphicon-th-large"></span>Update car</a></li>
			      <li ><a  id="a" href="../Work/ProfileUpdate.php"><span class="glyphicon glyphicon-pencil"></span>Profile Update</a></li>
			      <li><a  id="a" href="../Work/adminLogout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
			</ul>
	</div>
</div>

<div id="body" class="col-lg-10 col-md-10 col-sm-10 col-xs-10 pull-right" style="padding: 15px;">
  <div id="body2" class="col-lg-4 col-md-4 col-sm-5 col-xs-10"  style="position: initial;">
    <div class="thumbnail"  style="position: initial;">
      <img src="../../Images/lambo.jpg" alt="lamborgini" style="position: initial;">
      <div class="caption"  style="position: initial;">
        <h3  style="position: initial;">Lamborgini Cars</h3>
        <a href="updateCarSpecific.php?name=lamborgini" class="btn btn-primary" role="button"  style="position: initial;">Update</a>      
      </div>
    </div>
  </div>

  <div id="body2" class="col-lg-4 col-md-4 col-sm-5 col-xs-10"  style="position: initial;">
    <div class="thumbnail"  style="position: initial;">
      <img src="../../Images/fe.jpg" alt="Ferrari" style="position: initial;">
      <div class="caption"  style="position: initial;">
        <h3  style="position: initial;">Ferrari Cars</h3>
        <a href="updateCarSpecific.php?name=ferrari" class="btn btn-primary" role="button"  style="position: initial;">Update</a>      
      </div>
    </div>
  </div>

  <div id="body2" class="col-lg-4 col-md-4 col-sm-5 col-xs-10"  style="position: initial;">
    <div class="thumbnail"  style="position: initial;">
      <img src="../../Images/aston.jpg" alt="Aston" style="position: initial;">
      <div class="caption"  style="position: initial;">
        <h3  style="position: initial;">Aston Cars</h3>
        <a href="updateCarSpecific.php?name=aston" class="btn btn-primary" role="button"  style="position: initial;">Update</a>      
      </div>
    </div>
  </div>

   <div id="body2" class="col-lg-4 col-md-4 col-sm-5 col-xs-10"  style="position: initial;">
    <div class="thumbnail"  style="position: initial;">
      <img src="../../Images/tata.jpg" alt="TATA" style="position: initial;">
      <div class="caption"  style="position: initial;">
        <h3  style="position: initial;">TATA Cars</h3>
        <a href="updateCarSpecific.php?name=tata" class="btn btn-primary" role="button"  style="position: initial;">Update</a>      
      </div>
    </div>
  </div>

  <div id="body2" class="col-lg-4 col-md-4 col-sm-5 col-xs-10"  style="position: initial;">
    <div class="thumbnail"  style="position: initial;">
      <img src="../../Images/honda.jpg" alt="Honda" style="position: initial;">
      <div class="caption"  style="position: initial;">
        <h3  style="position: initial;">Honda Cars</h3>
        <a href="updateCarSpecific.php?name=honda" class="btn btn-primary" role="button"  style="position: initial;">Update</a>      
      </div>
    </div>
  </div>

<div id="body2" class="col-lg-4 col-md-4 col-sm-5 col-xs-10"  style="position: initial;">
    <div class="thumbnail"  style="position: initial;">
      <img src="../../Images/others.jpg" alt="Others" style="position: initial;">
      <div class="caption"  style="position: initial;">
        <h3  style="position: initial;">Others Cars</h3>
        <a href="updateCarSpecific.php?name=others" class="btn btn-primary" role="button"  style="position: initial;">Update</a>      
      </div>
    </div>
  </div>

</div>
</section>
	<?php include("footer.php");?>
</body>
</html>