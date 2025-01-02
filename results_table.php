	<?php session_start();?>
	
	<html lang="en">
<head>
  <title>Ceaser Foundation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript" src="/js/myScript.js"></script>
  <link href="css/stylefooter.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
        
 
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
<body onload="lastModified();";>

   <!-- Main -->   

<?php
		
		require_once('connector.php');
		include 'process.php';


		$customerId = $_SESSION['customerid'];
		$sql = "SELECT * FROM customers";
		$db = Database::getInstance();
		$customerDetails = $db->getConnection()->query($sql);

		echo '<div class="row justify-content-md-center">
		<div class="col-md-8 table-center">
			<div class="card mt-5">
				<table class="table table-hover table-outline table-striped table-sm">
					<thead class="thead-default blue-grey lighten-4">
						<tr>
							<th>Customer Id</th>
							<th>Password</th>
							<th>Name</th>
							<th>Family Name</th>
							<th>Phone No</th>
						</tr>
					</thead>
					<tbody>';
					if(mysqli_num_rows($customerDetails) > 0){
						while($row_customers = mysqli_fetch_array($customerDetails)){
							if($row_customers['customer_id'] != $customerId){
								echo '<tr>
								<td>'.$row_customers['customer_id'].'</td>
								<td>'.$row_customers['password'].'</td>
								<td>'.$row_customers['given_name'].'</td>
								<td>'.$row_customers['family_name'].'</td>
								<td>'.$row_customers['phone'].'</td>
							</tr>';
							}
						}
					}else{

					}
			echo '</tbody>
				</table>
			</div>
		</div>
		</div>'
		
		?>

	
        <div class="p-3 row justify-content-md-center header"> </div>

  <!-- ======= Footer ======= -->

	<?php include 'footer.php';?>

  <!-- End Footer -->   

</body>
</html>
