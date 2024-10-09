<?php require_once('../zvinodiwa/database.php');
      require_once('../zvinodiwa/session.php');
      require_once('mazvi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Agro | Dashboard </title>
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
     <link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.min.css">
<!--===============================================================================================-->
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php  include_once ('page-headers.php'); ?>
            <div class="line"></div>
            <div class="row">
           
            <div class="col-md-4">
               
      <div class="card-counter success">
         <a class="nav-link" href="orders_view.php" class="" style="color: #fff;">
        <i class="fa fa-home"></i>
        <span class="count-numbers"><?php echo $sammac1;?></span>
        <span class="count-name">Business Orders</span>
      </a></div>
    </div>
    
     <div class="col-md-4">
      <div class="card-counter info">
        <a class="nav-link" href="cust_orders_view.php" class="" style="color: #fff;">
        <i class="fa fa-user"></i>
        <span class="count-numbers"><?php echo $sammac3;?></span>
        <span class="count-name">Customer Orders</span>
    </a>
      </div>
    </div>
</div>
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card" style="font-size: 12px;">
            <p class="card-header sammac-media">All Orders<a href="orders_view.php"  style="margin-left: 100px;"> Pending</a>&nbsp;&nbsp;||<a href="orders_view2.php"  style=""> Paid</a>&nbsp;&nbsp;||<a href="orders_view3.php" style=""> Unpaid</a></p>    
            <div class="card-body" style="font-size: 12px;">
              <div id="tabs-4"><table class="table table-striped thead-dark table-bordered table-hover" id="mhishi" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Business name</th>
                    <th>TIN</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Product name</th>
                    <th>City</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    
                    <th>Agronomist</th>
                    <th>Status</th>
                    
                    <th>ACTION</th>
                    </tr>
                </thead>
                    <?php
                     $a=1;
                    $query=mysqli_query($db,"select *from `orders` where type ='business' and status = 'confirmed' ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                            <td><?php echo $row['fname'];?> </td> 
                              <td>;<?php echo $row['lname'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['Productname'];?></td>
                            <td><?php echo $row['city'];?></td>
                            <td><?php echo $row['qty'];?></td>
                            <td><?php echo $row['total'];?></td>
                            
                             <td><?php echo $row['username'];?></td>
                              <td><?php echo $row['status'];?></td>

                           
                             <td>  
                             <form action="orders_view2.php" method="POST">
                                <?php
                     $Pid= $row['productID'];
                     $qty = $row['qty'];
                    $query=mysqli_query($db,"select *from `agri_tips` where id ='$Pid'");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                                
                                            <input type="text" name="id" value="<?php $row['id']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="description" value="<?php echo $row['description']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="region" value="<?php echo $row['region']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="type" value="<?php echo $row['type']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="qty1" value="<?php echo $row['qty']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="qty" value="<?php echo $qty; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="total" value="<?php echo $row['total']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="file" value="<?php echo $row['file']; ?>" class="form-control1 control3" hidden>
                            <input type="text" name="date_t" value="<?php echo $date_t; ?>" class="form-control1 control3" hidden>

                  
                  <button type="submit" name="submit" class="btn btn-success"><span class="fa fa-check"></span>Transfer</button>
                  <?php
                       
                           
                      }?>
                  </form> 
                   
                              </td>  
                          </tr>
                          <?php
                       
                            $a++;
                      }
                                          
                   
                 

          if(isset($_POST['submit'])){
                            $id = mysqli_real_escape_string($db,$_POST['id']);
                            $description = mysqli_real_escape_string($db,$_POST['description']);
                            $region = mysqli_real_escape_string($db,$_POST['region']);
                           $total1 = mysqli_real_escape_string($db,$_POST['total']);
                            $type = mysqli_real_escape_string($db,$_POST['type']);
                            $name = mysqli_real_escape_string($db,$_POST['name']);
                            $price = mysqli_real_escape_string($db,$_POST['price']);
                            $qty1 = mysqli_real_escape_string($db,$_POST['qty1']);
                            $qty = mysqli_real_escape_string($db,$_POST['qty']);
                            $qty2 = $qty1 - $qty;
                            $total = $price * $qty;
                            $total2 = $total1 - $total;
                            //$image = mysqli_real_escape_string($db,$_POST['image']);         
                            $date_t = date('Y-m-d');

                             $file = $_POST['file'];
         
                  
                $sql = "INSERT INTO businessproducts(type,name,description,region,qty,price,total,file,date_t)VALUES('$type','$name','$description','$region','$qty','$price','$total','$file','$date_t')";
                
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                           
                        
                       
                            echo'Products Transfered successfully';
                    
                           
                          }      
                    $sql = "UPDATE agri_tips,orders SET agri_tips.qty = '$qty2', agri_tips.total = '$total2', orders.status= 'transfered' WHERE id = '$id'";
                $results = mysqli_query($db,$sql);
                             
                }

                
                ?>   
                </table> </div>
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
    <script src="../vendor/DataTables/datatables.min.js"></script> 
        <script>
    $(document).ready( function () {
    $('#mhishi').DataTable(30);
           
    } );
        </script>
       
   
</body>
</html>