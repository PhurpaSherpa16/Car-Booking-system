<?php
	define('host_name', "localhost");
	define('username', "root");
	define('password', "");
	define('db_name', "car");

	$connect=new mysqli(host_name,username,password,db_name);
	if ($connect->connect_error) {
		echo"connection failed".$connect->connect_error;		
	}
	else{
	//echo"succesfully connect";
	}

?>