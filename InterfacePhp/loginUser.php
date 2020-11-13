<?php  
     	 if(isset($_POST['email'])){
			$email=$_POST['email'];
			$password=$_POST['password'];
			registerUser($email,$password);
		}
	function  registerUser($email,$password){
		include('config.php');
		$check="SELECT * FROM user WHERE email='$email' AND password='$password'";
		$check_result=$connect->query($check);
		if ($check_result->num_rows===1) {
		if ($_COOKIE['check'] < 5 ) {
		session_start();
		$row=$check_result->fetch_assoc();
			$_SESSION['uid']=$row['uid'];
			$_SESSION['utype']=$row['utype'];
			$user=$row['utype'];
			if($user=='admin'){
				header('location:../admin');
			}
			else{
				header('location:../normal');
					}
				}
		else{
				header('location:../index.php?error='.$_COOKIE['check']);
					}
	 		}
			else{
					if(!isset($_COOKIE['check']))
					{
					setcookie('check',1,time()+15);
					}
				elseif($_COOKIE['check'] >5 ){
					header('location:../index.php?error='.$_COOKIE['check']);
					}
				else
				{
					$new_cookie=$_COOKIE['check']+1;
					setcookie('check',$new_cookie,time()+15);
				}
				header('location:../index.php?error='.$_COOKIE['check']);
			}
	}
?>
