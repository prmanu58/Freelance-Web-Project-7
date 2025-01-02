<?php

session_start();
require_once('connector.php');

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
	  $uname=$_POST['username'];
	  $password=$_POST['password'];

	  $sql = "SELECT * FROM customers WHERE customer_id='" . $uname . "' AND password='" . $password . "'";
	  $db = Database::getInstance();
	  $result = $db->getConnection()->query($sql);
	  $isLogin = mysqli_fetch_array($result);
	  var_dump($isLogin);

	  if($isLogin){
		$_SESSION['customerid'] = $isLogin['customer_id'];
		echo "<script> location.href='results_table.php'; </script>";
	  }
	  else{
		echo "<script> location.href='register.php'; </script>";
	  }
	}

?>