<?php require_once('../zvinodiwa/database.php');
      require_once('../zvinodiwa/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>AgriBoost | Dashboard </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/Jquery-ui/jquery-ui.min.css">
<!--===============================================================================================-->
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php  include_once ('page-headers.php'); ?>
            <div class="line"></div>
            
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
            <p class="card-header sammac-media">Add Agricultral Harvest </p>    
            <div class="card-body">
                
              <form class="form-horizontal" action="pest_save.php" method="post" enctype="multipart/form-data">
             <div class="row">
                
             <div class="col-md-9 form-group">
                 <label>Description</label>
                 <input type="text" name="description" class="form-control" maxlength="200" placeholder="about Harvest" required>
             </div>  
             <div class="col-md-3 form-group">
                 <label>Image</label>
                 <input type="file" name="file" class="form-control" maxlength="200"  required>
             </div> 
               
                 
             </div>  
         <div class="row">
             <div class="col-md-6 form-group">
                 <label>Type</label>
                 <select class="form-control" name="type">
                 <option>Casava</option>
                 <option>Patatoes</option>
                 
                    
                 </select>
             </div> 
              
                 <div class="col-md-6 form-group">
                 <label>Region</label>
                 <select class="form-control" name="region">
                    <option>--Choose region--</option>
                <?php  
                $name = $_SESSION["id"];
                  $query=mysqli_query($db,"SELECT * from region WHERE user = '$name'");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                 <option><?php echo $row['sector'];?></option>
                      <?php
                       
                            $a++;
                      } ?>
                 </select>
                
             </div> 
             
             
                 
             </div>  
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Price per unity</label>
                 <input type="text" name="Price" class="form-control" maxlength="200" placeholder="Price" required>
             </div>  
              
                 <div class="col-md-6 form-group">
                 <label>Quantity</label>
                 <input type="text" name="qty" class="form-control" maxlength="200" placeholder="quantity of Harvest" required>
             </div>  
             </div>  
                <div class="row">
                <div class="col-md-6 form-group">
                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span> Add</button>  
                </div> 
                 <div class="col-md-6 form-group">
                <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>    
                </div>
                
             </form>
            </div>
            </div>    
            </div>
           
            </div>
             <div class="line"></div>
                 <footer>
            <p class="text-center sm-sys">
           Agro system 2022 - <?php echo date('Y');?> &copy; All Rights Reserved Made with &#9829; by Ephron 
            </p>
            </footer>
           <div class="line"></div> 
        
        </div>
    </div>
  
       
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>
    <script src="../vendor/Jquery-ui/jquery-ui.min.js"></script>
    <script>
  $( function() {
   $("#ssm").datepicker({
    minDate: 0,
    maxDate:1,
});
      
  } );
  </script>
   
</body>
</html>