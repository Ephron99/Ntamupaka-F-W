<?php require_once('zvinodiwa/database.php');


                            if(isset($db,$_POST['submit'])){
                            $name = mysqli_real_escape_string($db,$_POST['name']);
                            $surname = mysqli_real_escape_string($db,$_POST['surname']);
                            $phone = mysqli_real_escape_string($db,$_POST['phone']);
                            $username = mysqli_real_escape_string($db,$_POST['email']);
                            $password = mysqli_real_escape_string($db,$_POST['password']);
                            $repassword = mysqli_real_escape_string($db,$_POST['repassword']);         
                            
                            $sql_e = "SELECT * FROM customer WHERE email ='$username'";
                            $res_e = mysqli_query($db, $sql_e);
                            if(mysqli_num_rows($res_e) > 0){
                            ?>
                             <div class="alert alert-danger  animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'Sorry its seems like you are trying to duplicate User';?></div>
                        <?php    
                       }else if ($password = $repassword)
                       	{      
                  
                $sql = "INSERT INTO customer(fname,lname,phone,email,password,repassword)VALUES('$name','$surname','$phone','$username','$password','$repassword')";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for Registration ';?></div>
                        <?php

                          }else{
                                ?>
                         <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Error! </strong><?php echo'OPPS something went wrong';?></div>
                        <?php    
                          }      
                      }
                 }

                
                ?>    
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
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/header1.jpg'); ">
			
				
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="" style="padding: 20px; width: 1200px;">
					<span class="login100-form-title p-b-41" style="color: #000;">
					Create Account
				</span>
             <div class="row">
             <div class="col-md-12 form-group">
                 <label>First Name</label>
                 <input type="text" name="name" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="First name" required>
             </div>  
              <div class="col-md-12 form-group">
                 <label>Last Name</label>
                 <input type="text" name="surname" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="surname" required>
             </div>       
                 
             </div>  
          
             <div class="row">
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