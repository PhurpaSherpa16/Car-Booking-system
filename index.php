<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sasin Car Store</title>
	<link rel="stylesheet" href="Css/boostrap.css">
	<link rel="stylesheet" href="Css/index.css">
  	<script src="Css/a.js"></script>
  	<script src="Css/b.js"></script>
  	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<style>
	.navbar{
	 background-color: #272828;
	 border:none;

	}
	.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
		background-color: #e8491d;
	}
	.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
		background-color: #e8491d;
	}
	#ab{
		color: white;
		font-size: 18px;
		letter-spacing: 5px;
		text-transform: uppercase;

	}
	#a{
		color: white;
		font-size: 15px;
		text-transform: uppercase;
		text-align:center;
	}
	#a:hover{
		background-color: #e8491d;
		font-size: 16px;
	}
	#slideImage{
		height: 450px;
		width: 100%;
		position: cover;
	}
</style>
<body >
<header>
	<nav class="navbar navbar-inverse" style="border-radius: 0px;">
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<a id="ab" class="navbar navbar-brand" href="#"><span style="font-size: 20px; color:  #e8491d">Sasin</span>Online Car Store</a>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right">
			 <ul class="nav navbar-nav navbar-right">
			      <li><a  id="a" href="InterfacePHP/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			      <li><a  id="a" href="InterfacePhp/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			 </ul>	
			</div>
			</div>
		</div>
	</nav>
</header>
<section id="imageGallery">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		   <div class="item active">
		      <img id="slideImage" src="Images/car4.jpg" alt="Lykan SuperSport">
		    </div>
		   <div class="item">
		      <img id="slideImage" src="Images/car.jpg" alt="Cevorlet">
		    </div>
		    <div class="item">
		      <img id="slideImage" src="Images/car0.jpg" alt="Lambo">
		    </div>
		    <div class="item">
		      <img id="slideImage" src="Images/car1.jpg" alt="Bugati">
		    </div>
		  </div>
		  <!-- Left and right controls -->
		 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		 </a>
		 <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		 </a>
	</div>
</section>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 150px;">
	<h1 style="text-align: center;margin-top: 50px;width: 100%;font-size: 27px;letter-spacing: 8px;text-transform: uppercase; font-weight:bold; color: #626363;">Your Satisfacion, Our Happiness</h1>
	<hr style="width: 30%; border-color: #e8491d; border-width: 2px; ">
	<p style="text-align: center; font-size: 15px; letter-spacing: 2px; font-family: Bodoni MT; color: #626363;">All kinds of Classic , Sporty, Super-Car or Passanger car are available. You can order if You need them, We are here to fuilfill.</p>
</div>
<section id="advertisment">
	<div class="row" style="margin: 0px; padding: 0px;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px;">
		<div id="imgback1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="img" style="background-image: url(Images/backcar.jpg); ">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right" style="background-color: ; min-height: 500px;">
				<h1>The Most Insane Supercars at the 2017 Geneva Auto Show Now In Nepal</h1>
				<p id="article">With the advantage of Switzerland’s famously accommodating banking laws attracting an international clientele with major cash to stash (and spend), Geneva more than any other auto show has a well-earned reputation as a place to introduce supercars. This year’s event was particularly bounteous for extreme-performance machines, with debuts running the gamut from major nameplates such as Ferrari, Lamborghini, and McLaren to more aspirational fringe players. Read on to see the many temptations afforded the world’s high-net-worth auto enthusiasts.</p>
				<button id="button" type="button" class="btn btn-primary" style="margin-bottom: 15px;">Show Me</button>
			</div>
		</div>
		<div id="imgback1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="img" style="background-image: url(Images/backcar1.jpg);">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-left" style="background-color: ; min-height: 500px;">
				<h1>Grab the Super Car, Classic and Sporty Design Car in Nepal</h1>
				<p id="article">While the Detroit auto show may be Cobo Center’s big-ticket automotive event, it’s certainly not the only vehicular gathering held within the confines of the nearly 60-year-old convention center. Notably, Cobo also houses Autorama, a custom-car and hot-rod show that brings together some of the finest custom-made vehicles from throughout North America. This year’s 65th annual Autorama contained more than 800 vehicles ranging from trailer queens to daily drivers, both imports and domestics. It’s hard to choose a favorite among the show cars crowding the convention-center floor, but the folks who put on Autorama make it their duty to crown a “best in show,” dubbed the Ridler award, to the vehicle that best combines “creativity, engineering, and quality workmanship.” The prize’s full name is the Don Ridler Memorial Award, which honors Autorama’s original promoter, and it was first given out in 1964.  </p>
				<button id="button" type="button" class="btn btn-primary" style="margin-bottom: 15px;">Grab Them</button>
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
						<br><a href="https://www.google.com.np/maps/place/Dillibazar/@27.705404,85.3244805,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19a77f1ab301:0xb213d09ebce4b3da!8m2!3d27.705404!4d85.3266692" target="_blank"><img src="Images/map.jpg" alt="map" height="180px" width="100%"></a>
					</div>
				</div>
				<div id="footerbox" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
					<div class="col-lg-13 col-md-12 col-sm-12 col-xs-12" style="min-height: 220px; background-color:  ; padding-top: 5px; padding-bottom: 5px;" >
						<label style="color: white; font-size: 15px;">Follow Us on:</label>
						<br>
						<div id="follow" class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="min-height: 70px; background-color: ; border-bottom: 2px solid red;"><a href="https://www.facebook.com" target="_blank"><img src="Images/fb.png" alt="facebook"></a> </div>
						<div  id="follow"  class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="min-height: 70px; background-color: ; border-bottom: 2px solid green">
							<a href="https://www.googleplus.com/" target="_blank"><img src="Images/google+.png" alt="google plus"></a>  </div>
						<div  id="follow"  class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="min-height: 70px; background-color: ;border-bottom: 2px solid yellow "><a href="https://www.twitter.com/" target="_blank"><img src="Images/tw.png" alt="twitter"></a>  </div>
						<div  id="follow" class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="min-height: 70px; background-color: ; border-bottom: 2px solid blue"><a href="https://www.blogger.com/" target="_blank"><img src="Images/blo.png" alt="blogger"></a>  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
