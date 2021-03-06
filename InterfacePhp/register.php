<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register form</title>
    <link rel="stylesheet" href="../Css/boostrap.css">
    <link rel="stylesheet" href="../Css/register.css">
    <link rel="stylesheet" href="../Css/boostrap.css">
    <link rel="stylesheet" href="../Css/index.css">
    <script src="../Css/a.js"></script>
    <script src="../Css/b.js"></script>
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
    .form-horizontal{
        -webkit-box-shadow: -3px 4px 30px -1px rgba(0,0,0,1);
                -moz-box-shadow: -3px 4px 30px -1px rgba(0,0,0,1);
                box-shadow: -3px 4px 30px -1px rgba(0,0,0,1);
                    margin-top: 10px;
                    padding-top: 10px;
                    margin-bottom: 10px;
    }
</style>
<body> 
<header>
    <nav class="navbar navbar-inverse" style="border-radius: 0px;">
        <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a id="ab" class="navbar navbar-brand" href="../index.php"><span style="font-size: 20px; color:  #e8491d">Sasin</span>Online Car Store</a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right">
             <ul class="nav navbar-nav navbar-right">
                  <li><a  id="a" href="../InterfacePHP/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a  id="a" href="../InterfacePhp/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
             </ul>  
            </div>
            </div>
        </div>
    </nav>
</header>

<section id="form">
            <div class="container" >
            <div class="row" id="form"  >
            <div class="col-sm-12">
                <form class="form-horizontal" role="form" method="post" action="registerToDatabase.php" style="background-color: #272828;">
                <h2 style="color: white;">Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Enter Your First Name" name="fname" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lname" placeholder="Enter Your Last Name" class="form-control" required autofocus>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="userName" class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="userName" name="uname" placeholder="Enter Your User Name" class="form-control" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" name="email" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" placeholder="Password" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" required="required" name="dob" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="female"> Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                  <input type="radio" name="gender" value="male" checked> Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                     <input type="radio" name="gender" value="other"> Other  
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button id="register" type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
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