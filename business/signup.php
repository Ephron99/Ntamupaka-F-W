   
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Agriculture System Login</title>
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
</head>
<body>
     <?php  include_once ('page-headers.php'); ?>
	
	<div class="limiter" style="width: 96%;">
		<div class="container-login100" style="background-image: url('images/header1.jpg'); ">
			
				
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="business_save.php" enctype="multipart/form-data" style="padding: 20px; width: 1200px;">
					<span class="login100-form-title p-b-41" style="color: #000;">
					Business Registration
				</span>
             <div class="row">
                <div class="col-md-12 form-group">
                Business Info
             </div>       
             <div class="col-md-12 form-group">
                 <label>Business Name</label>
                 <input type="text" name="name" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="name" required>
             </div> 
             <div class="col-md-6 form-group">
                 <label>Business TIN</label>
                 <input type="text" name="tin" class="form-control" pattern="[0-9]{10,10}" maxlength="20" placeholder="TIN Number" required>
             </div> 
             <div class="col-md-6 form-group">
                 <label>Business Logo</label>
                 <input type="file" name="file" class="form-control" required>
             </div>  
              <div class="col-md-12 form-group">
                 Business Location
             </div>       
             <div class="col-md-12 form-group">
                 <label>Country</label>
                 <input type="text" name="country" class="form-control" value="Rwanda" readonly>
             </div>       
                 
             </div>  
          
             <div class="row">
                <div class="col-md-12 form-group">
                 <label>City</label>
                 <input type="text" name="city" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="City" required>
             </div>
             <div class="col-md-12 form-group">
                 Business Address
             </div>              
             <div class="col-md-12 form-group">
                 <label>Phone Number</label>
                 <input type="text" name="phone" class="form-control" pattern="[0-0]{1,1}[7-7]{1,1}[1-9]{2,2}[0-9]{6,6}" maxlength="20" placeholder="Phone number" required>
             </div>  
              <div class="col-md-12 form-group">
                 <label>Email</label>
                 <input type="text" name="email" class="form-control" pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i" maxlength="20" placeholder="Email address" required>
             </div>       
                 
             </div>  
         <div class="row">
             <div class="col-md-12 form-group">
                 Login Info
             </div>  
             <div class="col-md-12 form-group">
                 <label>Username</label>
                 <input type="text" name="Username" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="Username" required>
             </div>            
              <div class="col-md-6 form-group">
                 <label>Password</label>
                 <input type="password" name="password" class="form-control"  maxlength="20" placeholder="password" required>
             </div>
             <div class="col-md-6 form-group">
                 <label>Comfirm Password</label>
                 <input type="password" name="repassword" class="form-control"  maxlength="20" placeholder="Repassword" required>
             </div>
             
                 
             </div>  
                <div class="row">
                <div class="col-md-3 form-group">
                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span>Signup</button>  
                </div> 
                 <div class="col-md-3 form-group">
                <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>    
                </div>
                
             </form>
			
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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

</body>
</html>