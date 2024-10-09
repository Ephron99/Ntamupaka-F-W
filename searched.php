
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
	
    
    <?php  include_once ('page-header.php'); ?>
    
	
<div id="services" class="container-fluid text-center" style="margin: 5px; ">
	
        <h1><b>Available Products</b></h2>
        
        <table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
        <div class="row slideanim" style="margin-left: 100px;">
<?php
if (isset($_GET['search'])) {
                    	$filtervalues = $_GET['search'];
                     
                    $query=mysqli_query($db,"SELECT * FROM `agri_tips` where CONCAT(description,region,type,qty,price,total,date_t) LIKE '%$filtervalues%'");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
        
            <div class="card" width="320px" height="250px" style="margin: 10px; display: flex;">
            	<a href="#">
            		<a href="more.php?edited=1&idx=<?php echo $row['id']; ?>" >

<img src="images/<?php echo $row['file'];?>" width="320px" height="250px">

                <div class="row slideanim" style="margin-left: 0px; display: block;">
							<div>
								<p>Product:&nbsp;<?php echo $row['name'];?></p>
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
							</div></a>
							<form action="order.php" method="post">
								<input type="text" name="user"  value="<?php echo $row['user'];?>" hidden>
								<input type="text" name="name"  value="<?php echo $row['name'];?>" hidden>
								<input type="text" name="price"  value="<?php echo $row['price']; ?>" hidden>
								
								<input type="text" name="qty" class="form-control" placeholder="Quantity" style="width:300px; margin-left: 10px;" required>
						</div>
                 <button type="submit" name="send" class="login100-form-btn" style="margin: 10px 50px 5px 100px;">MAKE Order</button>
                 	</form>
            </div>
            
            <?php
                       
                           
                      }}
                      ?></table>

        </div></div></div>
    </div>
	<div id="dropDownSelect1"></div>
	<div class="footer" style="width: 100%; background: #444;">
      <div class="fp_menu"> <a href="#" style="margin-left:100px;">home</a> <a href="#">about us</a>  <a href="#">contact us</a> </div>
      <p class="text-center sm-sys">
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