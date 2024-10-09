<?php require_once('zvinodiwa/session.php');?>
<?php require_once('zvinodiwa/database.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Agriculture System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	
    
    <?php  include_once ('page-headers.php'); ?>
	<div class="limiter" style="margin-top: 5px;">
		<div class="container-login100" style="background-image: url(''); margin-top: -60px; height: 50px;">
			<div class="wrap-login100 p-t-30 p-b-50">

				<span class="login100-form-title p-b-41">
					<h6>welcome 
					<?php echo $_SESSION["name"];?>, <br>
						<?php
					$id = $_SESSION["id"];
					$query=mysqli_query($db,"select *from `orders` where customerID ='$id'");
                     while($row=mysqli_fetch_array($query))
                        {
             
					  ?>
					 <p> Your Order Of
					 <?php echo $row['Productname'];?> Is <?php echo $row['status'];?></p>
				<?php } ?>
					</h6>
				</span>
				
			</div>
		</div>
	</div>
	


    </div>
	<div id="dropDownSelect1" style="background: #00bd56;">
		<div class="row">
    
    <div class="col-4">Contact us via<br>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">+250 785 247 164</li>
  <li class="list-group-item">+250 735 208 658</li>
  <li class="list-group-item">twagirimanaephron1@gail.com</li>
  
</ul>
</div>
    
  </div>
	</div>
	
           <center><p>Agriculture System 2022 - <?php echo date('Y');?> &copy; All Rights Reserved Made with &#9829; by Ephron  
            </p> </center>
  
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
    $(document).ready( function () {
    $('#mhishi').DataTable();
           
    } );
        </script>

</body>
</html>