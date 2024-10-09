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
					<?php echo $_SESSION["name"];?>, are not You?
					<a href="../index.php" >
                 	<button class="btn btn-dark" style="margin: 10px 50px 5px 100px;">logout</button></a></h6><br>
                <h4> <h6>welcome 
          <?php echo $_SESSION["name"];?>, Are You?<br>
                  <a href="order_check.php" >
                  <button class="btn btn-primary" style="margin: 10px 50px 5px 100px;">Check Your Order</button></a></h4>
				</span>
				
			</div>
		</div>
	</div>
	
<div id="services" class="container-fluid text-center" style="margin: 10px; ">
        <h1><b>Products</b></h2>
        
        <table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
        <div class="row slideanim" style="margin-left: 100px;">
<?php
                     $a=1;
                    $query=mysqli_query($db,"select *from `agri_tips` limit 6 ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
        
            <div class="card"  style="margin: 5px; display: flex;">
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
								<input type="text" name="pid"  value="<?php echo $row['id'];?>" hidden>
                <input type="text" name="user"  value="<?php echo $row['user'];?>" hidden>
								<input type="text" name="name"  value="<?php echo $row['name'];?>" hidden>
								<input type="text" name="price"  value="<?php echo $row['price']; ?>" hidden>
								
								<input type="text" name="qty" class="form-control" placeholder="Quantity" style="width:300px; margin-left: 10px;" required>
							
						</div> 
						
                 	<button type="submit" name="send" class="login100-form-btn" style="margin: 10px 50px 5px 100px;">MAKE Order</button>
                 	</form>
            </div>
           
            <?php
                       
                           
                      }
                      ?>
                       
              </table>
              <div class="row slideanim" style="margin-left: 1000px">
                  <a class="nav-link" href="searched.php?search=" style="color: #fff; float: right;"><button class="btn btn-dark" style="margin: -5px 5px 5px 5px;">Check More</button></a></div>


        </div></div></div>
         <div class="row align-items-start" style="background-color: #333; height: 100px; width: 98%; margin-left: 20px; color: #fff;">
    <div class="col">
      <center><h1 style="margin-top: 20px;">Our Parters (Business)</h1></center>
    </div>
    
  </div>
       
  <div class="row " style="margin:20px;">
    <?php
                     $a=1;
                    $query=mysqli_query($db,"select *from `business` limit 6 ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
    <div class="col-md-4">
      <div class="p-3 border bg-light"><img src="../images/<?php echo $row['file'];?>" style="width: 420px; height: 400px;"></div>
      <center><?php echo $row['name'];?></center>
    </div>
    
    <?php
                       
                           
                      }
                      ?>
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