<?php require_once('zvinodiwa/session.php'); ?>
<?php require_once('zvinodiwa/database.php');


                            if(isset($db,$_POST['submit'])){
                            $pname = mysqli_real_escape_string($db,$_POST['Pname']);
                            $user = mysqli_real_escape_string($db,$_POST['user']);
                            $name = mysqli_real_escape_string($db,$_POST['name']);
                            $surname = mysqli_real_escape_string($db,$_POST['surname']);
                            $phone = mysqli_real_escape_string($db,$_POST['phone']);
                            $username = mysqli_real_escape_string($db,$_POST['email']);
                            $country = mysqli_real_escape_string($db,$_POST['country']);
                            $city = mysqli_real_escape_string($db,$_POST['city']);         
                            
                           
                  
                $sql = "INSERT INTO orders(fname,lname,phone,email,country,city,Productname,username,status)VALUES('$name','$surname','$phone','$username','$country','$city','$pname','$user','Panding')";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for ordering ';?></div>
                        <?php

                          }else{
                                ?>
                         <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Error! </strong><?php echo'OPPS something went wrong';?></div>
                        <?php    
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
     <?php  include_once ('page-headers.php'); ?>
     
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/header1.jpg'); ">
			
				<div class="container">
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="" style="padding: 20px;">
                    <?php
                       
                        
                      if(isset($db,$_POST['send'])){
                            $name = mysqli_real_escape_string($db,$_POST['name']);
                            $user = mysqli_real_escape_string($db,$_POST['user']);
                            $price = mysqli_real_escape_string($db,$_POST['price']);
                            $qty = mysqli_real_escape_string($db,$_POST['qty']);
                           $total = $price * $qty;
                          ?>
					<span class="login100-form-title p-b-41" style="color: #000;">
					Order Details
				</span>
             <div class="row">

             <div class="col-md-6 form-group">
                
                 <input type="text"  class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="First name" hidden>
                 <input type="text"  class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="First name" hidden>
             </div>  
             <div class="col-md-6 form-group">
                 Your order
                 <table class="table table-borderless">
 <tr>
     <th>
         Product
     </th>
     <th>
         Subtotal
     </th>
 </tr><tr>
     <td>
        <?php echo $name;?>
     </td>
     <td>
        <?php echo $price; ?> <?php echo '/ kg'; ?>
     </td>
 </tr>
 <tr>
     <td>
        Quantity
     </td>
     <td>
        <?php echo $qty; ?>
     </td>
 </tr>
 <tr>
     <th>
        Total
     </th>
     <td>
        <?php echo $total; ?>
     </td>
 </tr>
</table>
             </div> 
            
                 <input type="text" name="Pname" class="form-control" value="<?php echo $name;?>" hidden>
                 <input type="text" name="user" class="form-control" value="<?php echo $user;?>" hidden>
             
             <div class="col-md-9 form-group">
                 <label>First Name</label>
                 <input type="text" name="name" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="First name" required>
             </div> 
             </div>  
          
             <div class="row">  
              <div class="col-md-9 form-group">
                 <label>Last Name</label>
                 <input type="text" name="surname" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="surname" required>
             </div>       
                 
             </div>  
          
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Phone Number</label>
                 <input type="text" name="phone" class="form-control" pattern="[0-0]{1,1}[7-7]{1,1}[1-9]{2,2}[0-9]{6,6}" maxlength="20" placeholder="Phone number" required>
             </div> 
             </div>  
         <div class="row"> 
              <div class="col-md-6 form-group">
                 <label>Email</label>
                 <input type="text" name="email" class="form-control" pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i" maxlength="20" placeholder="Email address" required>
             </div>       
                 
             </div>  
         <div class="row">
             
              <div class="col-md-6 form-group">
                 <label>Country</label>
                 <input type="text" name="country" class="form-control"  maxlength="20" value="Rwanda" readonly>
             </div>
             </div>  
         <div class="row">
             <div class="col-md-6 form-group">
                 <label>City</label>
                 <input type="text" name="city" class="form-control"  maxlength="20" placeholder="City" required>
             </div>
             
                 
             </div>  
                <div class="row">
                <div class="col-md-3 form-group">
                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span>Place Order</button>  
                </div> 
                 <div class="col-md-3 form-group">
                <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>    
                </div>
                
             </form>
             <?php
                       
                           
                      }
                      ?>
			
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