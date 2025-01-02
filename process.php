<html>
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            </head>
            
            <body>
            <div class="p-3 row justify-content-md-center header">
            </div>
            </body>
            </html>

<?php
session_start();
require_once('connector.php');


$customerId = $_SESSION['customerid'];
$sql = "SELECT * FROM customers";
$db = Database::getInstance();
$customerDetails = $db->getConnection()->query($sql);

echo '<div class="row justify-content-md-center">
<div class="col-md-8 table-center">
    <div class="card mt-5">
        <div class="card-header">Tutor Details</div>
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
</div>';