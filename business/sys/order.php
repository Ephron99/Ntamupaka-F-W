<?php require_once('../zvinodiwa/database.php');
      require_once('../zvinodiwa/session.php');
      require_once('mazvi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agri | Dashboard </title>
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
    <link rel="stylesheet" type="text/css" href="../vendor/Jquery-ui/jquery-ui.min.css">
     <link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.min.css">
<!--===============================================================================================-->
           <?php 
/*
$cache_file = 'data.json';
 if(file_exists($cache_file)){
   $data = json_decode(file_get_contents($cache_file));
 }else{
  $api_url = 'https://content.api.nytimes.com/svc/weather/v2/current-and-seven-day-forecast.json';
  $data = file_get_contents($api_url);
  file_put_contents($cache_file, $data);
  $data = json_decode($data);
 }

$current = $data->results->current[0];
$forecast = $data->results->seven_day_forecast;*/

?>
<style>

  .aqi-value{
    font-family : "Noto Serif","Palatino Linotype","Book Antiqua","URW Palladio L";
    font-size:30px;
    font-weight:bold;
  }
  h1{
    text-align: center;
    font-size:3em;
  }
  .forecast-block{
    background-color: #fff!important;
    width:20% !important;
  }
  .title{
    background-color:#1b262c;
    width: 100%;
    color:#fff;
    margin-bottom:0px;
    padding-top:10px;
    padding-bottom: 10px;
  }
  .bordered{
    border:1px solid #000;
  }
  .weather-icon{
    width:40%;
    font-weight: bold;
    background-color: #1b262c;
    padding:10px;
    border: 1px solid #000;
  }
</style>

<?php
  function convert2cen($value,$unit){
    if($unit=='C'){
      return $value;
    }else if($unit=='F'){
      $cen = ($value - 32) / 1.8;
        return round($cen,2);
      }
  }
?>
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
     <?php  include_once ('page-headers.php'); ?>
            <div class="row">
           
    
 <!--<div class="col-md-4">
      <div class="card-counter success">
        <i class="fa fa-info"></i>
        <span class="count-numbers"><?php echo $sammac1;?></span>
        <span class="count-name">Control Harvest</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-book"></i>
        <span class="count-numbers"><?php echo $sammac2;?></span>
        <span class="count-name">Orders</span>
      </div>
    </div>
     <div class="col-md-4">
      <div class="card-counter info">
        <i class="fa fa-users"></i>
        <span class="count-numbers"><?php 
         if(isset($db,$_POST['submit'])){
                            $pid = mysqli_real_escape_string($db,$_POST['pid']);
                             $pname = mysqli_real_escape_string($db,$_POST['Pname']);
                             $qty1 = mysqli_real_escape_string($db,$_POST['qty1']);
                             $qty = mysqli_real_escape_string($db,$_POST['qty']);
                             $price = mysqli_real_escape_string($db,$_POST['price']);
                             $total = $qty * $price;
                            $user = mysqli_real_escape_string($db,$_POST['user']);
                            $bid = $_SESSION["id"];
                            $name = mysqli_real_escape_string($db,$_POST['name']);
                            $surname = mysqli_real_escape_string($db,$_POST['surname']);
                            $phone = mysqli_real_escape_string($db,$_POST['phone']);
                            $username = mysqli_real_escape_string($db,$_POST['email']);
                            $country = mysqli_real_escape_string($db,$_POST['country']);
                            $city = mysqli_real_escape_string($db,$_POST['city']);         
                            
                           if ($qty1 >= $qty){
    

                  
                $sql = "INSERT INTO orders(fname,lname,phone,email,country,city,productID,businessID,Productname,qty,price,total,username,status,type)VALUES('$name','$surname','$phone','$username','$country','$city','$pid','$bid','$pname','$qty','$price','$total','$user','Panding','business')";
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
                      }}
                
                
                ?>    </span>
        <span class="count-name">Users</span>
      </div>
    </div>-->
  
           
            </div>


  <br>
  
  <div class="row">
    <h3 class="title text-center bordered"> Order Details</h3>
<div class="container">
                <form class="login100-form validate-form p-b-33 p-t-5" method="post" action="order.php" style="padding: 20px;">
                    <?php
                       
                        
                      if(isset($db,$_POST['send']) && $_POST['qty1'] >= $_POST['qty']){
                            $pid = mysqli_real_escape_string($db,$_POST['pid']);
                             
                             $qty1 = mysqli_real_escape_string($db,$_POST['qty1']);
                             $name = mysqli_real_escape_string($db,$_POST['name']);
                            $user = mysqli_real_escape_string($db,$_POST['user']);
                            $price = mysqli_real_escape_string($db,$_POST['price']);
                            $qty = mysqli_real_escape_string($db,$_POST['qty']);
                           $total = $price * $qty;
                          ?>
                    <span class="login100-form-title p-b-41" style="color: #000;">
                   
                </span>
             <div class="row">

             <div class="col-md-6 form-group">
                
                 
             </div>  
             <div class="col-md-12 form-group">
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
             <?php

                        $tin = $_SESSION["username"];
                     
                    $query=mysqli_query($db,"SELECT * FROM `business` where TINnumber =  '$tin'");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <input type="text"  name="pid" value="<?php echo $pid ?>" hidden>
                 <input type="text"  name="qty1" value="<?php echo $qty1 ?>" hidden>
                 <input type="text"  name="price" value="<?php echo $price ?>" hidden>
                 <input type="text"  name="qty" value="<?php echo $qty ?>" hidden>
            
                 <input type="text" name="Pname" class="form-control" value="<?php echo $name;?>" hidden>
                 <input type="text" name="user" class="form-control" value="<?php echo $user;?>" hidden>
             
             <div class="col-md-9 form-group">
                 <label>Business Name</label>
                 <input type="text" name="name" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" value="<?php echo $row['name'];?>" readonly>
             </div> 
             </div>  
          
             <div class="row">  
              <div class="col-md-9 form-group">
                 <label>TIN Number</label>
                 <input type="text" name="surname" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" value="<?php echo $row['TINnumber'];?>" readonly>
             </div>       
                 
             </div>  
          
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Phone Number</label>
                 <input type="text" name="phone" class="form-control" pattern="[0-0]{1,1}[7-7]{1,1}[1-9]{2,2}[0-9]{6,6}" maxlength="20" value="<?php echo $row['phone'];?>" required>
             </div> 
             </div>  
         <div class="row"> 
              <div class="col-md-6 form-group">
                 <label>Email</label>
                 <input type="text" name="email" class="form-control" pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i" maxlength="20" value="<?php echo $row['email'];?>" required>
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
                 <input type="text" name="city" class="form-control"  maxlength="20" value="<?php echo $row['city'];?>" required>
             </div>
             
                 
             </div>  
                <div class="row">
                <div class="col-md-3 form-group">
                <button type="submit" name="submit" class="btn btn-dark btn-block"><span class="fa fa-check"></span>Place Order</button>  
                </div> 
                 <div class="col-md-3 form-group">
                <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>    
                </div>
                
             </form>
             <?php
                       
                           
                      }}
                      else{
                                ?>
                         <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Error! </strong><?php echo'OPPS something went wrong! Maybe you entered more than available quantity';?></div>
                      <?php }?>
            
        </div>

        </div></div></div>
    </div>
                      </div></div> 
            </div>
            </div>    
            </div>
           
            </div>
          </div>
        </div>
          </div>
    </div>
  </div>
  <br><br>
  

            <div class="line"></div>
            
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
    <script src="../vendor/DataTables/datatables.min.js"></script> 
        <script>
    $(document).ready( function () {
    $('#mhishi').DataTable();
           
    } );
        </script>
       
   
</body>
</html>