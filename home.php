<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ceaser Foundation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

  <script src="/js/myScript.js"></script>
  <link href="css/stylefooter.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">

 
	<!-- favicon -->

	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
  

	  <!-- Vendor CSS Files -->
	  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
 
	  <!-- JQuery responsive image ad -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script> 
        function validation() { 
            if($("#password").val()==""){
              alert("Username or Paasword cannot be empty")
              return false;
            }
            var field = $("#username").val(); 
	          var unlen = 8;
		        if(field.length!=unlen)
			        { 
			      alert("Username cannot be empty and must contain exactly 8 characters!");
				return false;
			}
        }
    </script>
 
 <style>
 
  body {
    background-image: url("images/apes.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }


  </style>
</head>
<body onload="lastModified();">

  <!-- ======= Header ======= -->

	<?php include 'header.php';?>
 
 
   <!-- End Header -->   
	


		<div class="login-page" style="padding: 100px 0 10px 0";>
		  <div class="form" >
			<form name="form1" class="login-form" method="POST" action="login.php" onSubmit="return validation()">
			  <input type="text" id="username" name="username" placeholder="Customer ID"/>
			  <input type="password" id="password" name="password" placeholder="Password"/>
			  <button type="submit">login</button>
			  <p class="message">Not registered? <a href="register.php">Create an account</a></p>
			</form>
		  </div>
		</div>


  <!-- ======= Footer ======= -->

	<?php include 'footer.php';?>


   <!-- End Footer -->   

</body>
</html>