
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
    <?php
                       
                        
                       if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          $query=mysqli_query($db,"SELECT * FROM `agri_tips`  WHERE id = '$id'");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                    
	<div class="limiter" style="margin-top: 5px;">
		<div class="container-login100" style="background-image: url('images/<?php echo $row['file'];?>'); margin-top: -60px; height: 50px;">
				<table style="color: #fff; width: 900px; background-color: #333; margin-top: -5px;">
						<tr >
							<td colspan="2"><h1> Product:</h1>&nbsp;</td>
							
							<td><h4><?php echo $row['type'];?></h4></td>
						</tr>
						<tr>
							<td colspan="2"><h1> Price:</h1>&nbsp;</td>
							
							<td><h4><?php echo $row['price']; ?> <?php echo '/ kg'; ?></h4></td>
						</tr>
						<tr>
							<td colspan="2"><h1> Location:</h1>&nbsp;</td>
							
							<td><h4><?php echo $row['region']; ?></h4></td>
						</tr>
						<tr>
							<td colspan="2"><h1> Quantity:</h1>&nbsp;</td>
							
							<td><h4><?php echo $row['qty']; ?> <?php echo ' kg'; ?></h4></td>
						</tr>
						


					</table>
			<div class="wrap-login100 p-t-30 p-b-50">
				<div class="row slideanim" style="margin-left: 0px; display: block; width: 1000px;">

		</div>
							
				
	</div>
	</div>
					<div class="row slideanim" style="margin-left: 100px; display: flex;">
        <?php
                       
                        
                      
                          $type = $row['type'];
                          $query=mysqli_query($db,"SELECT * FROM `agri_tips`  WHERE type = '$type'");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <div class="card" width="320px" height="250px" style="margin: 10px; display: flex;">
            	<a href="#">

					<img src="images/<?php echo $row['file'];?>" width="320px" height="250px">
					
						<div class="row slideanim" style="margin-left: 0px; display: block;">
							<div>
								<p>Product:&nbsp;<?php echo $row['type'];?></p>
							</div>
							<div>
								<p>Price:&nbsp;&nbsp;&nbsp;<?php echo $row['price']; ?> <?php echo '/ kg'; ?></p>
							</div>
						</div>
						<div class="row slideanim" style="margin-left: 0px; display: block;">
							<div>
								<p>Location:&nbsp;<?php echo $row['region']; ?> </p>
							</div>
							<div>
								<p>Quantity: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['qty']; ?> <?php echo ' kg'; ?></p>
							</div>
						</div>
					<a href="more.php?edited=1&idx=<?php echo $row['id']; ?>" >
                 	<button class="login100-form-btn" style="margin: 10px 50px 5px 100px;">Read more</button></a>
            </div>
            <?php
                       
                           
                      }}}
                      ?>
    
			
		
	</div>
	


        </div>
        <div id="services" class="container-fluid text-center" style="margin: 10px; ">
        <h1><b>Products</b></h2>
        
        <table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
        
</div>


    </div>
	<div id="dropDownSelect1"></div>
	<div class="footer" style="background: #00bd56; width: 100%; height: 300px;">
      <div class="fp_menu" style="display: block;"> <a href="#" style="margin-left:100px;">home</a> <a href="#">about us</a>  <a href="#">contact us</a> </div>
      <p class="text-center sm-sys" style="color: #fff;">
           Agriculture System 2022 - <?php echo date('Y');?> &copy; All Rights Reserved Made with &#9829; by Ephron  
            </p> </div>
  
	
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