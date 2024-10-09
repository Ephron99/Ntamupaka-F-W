<?php require_once('../zvinodiwa/database.php');
      require_once('../zvinodiwa/session.php');

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
            <div class="line"></div>
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card" style="font-size: 12px;">
            <h3 class="title text-center bordered">All Products</h3>    
            <div class="card-body">
              <div id="tabs-4"><table class="table table-striped thead-dark table-bordered table-hover" id="mhishi">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Product Type</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    
                    
                    <th>ACTION</th>
                    </tr>
                </thead>
                    <?php
                     $a=1;
                    $query=mysqli_query($db,"select *from `businessproducts`");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                            <td><?php echo $row['type'];?> </td> 
                            <td><?php echo $row['name'];?></td> 
                              
                            <td><?php echo $row['qty'];?></td>
                            <td><?php echo $row['price'];?></td>
                            <td><?php echo $row['total'];?></td>
                            

                           
                             <td>    
                  <a href="product_view.php?edited=1&idx=<?php echo $row['id']; ?>"  class="btn btn-danger"><span class="fa fa-close">Delete</span></a>
                  <a href="product_view.php?edited=1&idx=<?php echo $row['id']; ?>"  class="btn btn-success"><span class="fa fa-edit">Edit</span></a>
                  </td>  
                          </tr>
                          <?php
                       
                            $a++;
                      }
                                          
                       if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          if ($stmt = $db->prepare("DELETE FROM businessproducts WHERE id = ? LIMIT 1"))
                          {
                              $stmt->bind_param("i",$id);
                              $stmt->execute();
                              $stmt->close();
                               ?>
                    <div class="alert alert-warning " >
                   <?php echo'Record Successfully deleted';?></div>
                   <script>
                       setTimeout(function () {
                        window.location.href = "product_view.php";
                        }, 5000); 
                      
                    </script>
            
                    <?php
                          }
                          

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