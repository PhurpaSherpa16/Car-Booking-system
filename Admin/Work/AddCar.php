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
                <form id="body2" class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="carRegister.php" style="background-color: #272828;">
                <h2 style="color: white;">Registration Form</h2>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Brand</label>
                    <div class="col-sm-9">
                          <select class="form-control" name="brand">
		        <option value="None">None</option>
		        <option value="lamborgini">Lamborgini</option>
		        <option value="ferrari">Ferrari</option>
		        <option value="aston">Aston Martini</option>
		        <option value="tata">TaTa</option>
		        <option value="honda">Honda</option>
		        <option value="other">Other</option>
		</select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Name Of Car</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Enter the Name" name="carname" class="form-control" required autofocus >
                    </div>
                </div>
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" name="price" placeholder="Enter the price" class="form-control" required autofocus autocomplete="off">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-3 control-label">Mile/Hrs</label>
                    <div class="col-sm-9">
                        <input type="text" name="mile" placeholder="Enter Spped in mile" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Acceleration</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Acceleration of car" name="acc" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Year</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" name="year" placeholder="Enter the year of manufacture" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Catogery</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="sel1" name="catogery">
		        <option value="None">None</option>
		        <option value="sport">Sport</option>
		        <option value="classic">Calssic</option>
		        <option value="morden">Morden</option>
		</select>
                    </div>
                </div>
	<div class="form-group">
			 <label for="birthDate" class="col-sm-3 control-label">Description</label>
                    		<div class="col-sm-9">
			<textarea rows="10" class="form-control" id="description" name="desc" placeholder="Enter the description of car" autocomplete="off" required="required"></textarea>
			</div>
	</div>
	<div class="form-group">
			 <label for="birthDate" class="col-sm-3 control-label">Image</label>
			<input type="file" id="upimage" value="prouduct-image" name="image" required="required" style="color: white;margin-left: 150px;">
	</div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button id="register" type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
</div>
</section>
	<?php include("footer.php");?>
</body>
</html>