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
            <?php
                            if(isset($db,$_POST['submit'])){
                            $country = mysqli_real_escape_string($db,$_POST['country']);
                            $provence = mysqli_real_escape_string($db,$_POST['provence']);
                            $district = mysqli_real_escape_string($db,$_POST['district']);
                            $sector = mysqli_real_escape_string($db,$_POST['sector']);
                            $user = mysqli_real_escape_string($db,$_POST['user']);

                            
                            $sql_e = "SELECT * FROM region WHERE sector ='$sector'";
                            $res_e = mysqli_query($db, $sql_e);
                            if(mysqli_num_rows($res_e) > 0){
                            ?>
                             <div class="alert alert-danger  animated shake" >
                       <?php echo'Sorry the sector is already registered';?></div>
                        <?php    
                       }else{      
                  
                $sql = "INSERT INTO region(country,provence,destrict,sector,user)VALUES('$country','$provence','$district','$sector','$user')";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for adding new sector ';?></div>
                        <?php
                            error_reporting(0);
                            $username = 'samstrover';
                            $token = 'e14916d71b35f236e25a3fe9fc8c4449';
                            $bulksms_ws = 'http://portal.bulksmsweb.com/index.php?app=ws';
                            $destinations = $phone;
                            $message = "Hello $name thank you for subscribing to our services. You will receive updates of weather, pest control methods";

                            $ws_str = $bulksms_ws . '&u=' . $username . '&h=' . $token . '&op=pv';
                            $ws_str .= '&to=' . urlencode($destinations) . '&msg='.urlencode($message);
                            $ws_response = @file_get_contents($ws_str); 

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
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
            <p class="card-header sammac-media">Add Region </p>    
            <div class="card-body">
              <form action="region_add.php" method="post">
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Country</label>
                 <input type="text" name="country" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="Rwanda" value="Rwanda" readonly>
             </div> 
             <div class="col-md-6 form-group">
                 <label>Provence</label>
                 <select class="form-control"  name="provence" id="selct1" onchange="populate(this.id,'selct2')">
                    <option>--choose provence--</option> 
                 <option value="Southen">Southen</option>
                 <option value="Northen">Northen</option>
                 <option>Easten</option> 
                 <option>Westen</option>
                 <option>Kigali</option>
                     
                 </select></div>
             </div>  
             <div class="row">
              
                 <div class="col-md-6 form-group">
                 <label> District</label>
                 <select class="form-control"  name="district" id="selct2" onchange="populate(this.id,'selct3')">
                 
                     
                 </select></div>
                  
                   
              <div class="col-md-6 form-group">
                 <label>Sector</label>
                 <input type="text" name="sector" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="sector">
                 <?php
                 $user = $_SESSION['username'];
                 $query=mysqli_query($db,"select *from `users` where username = '$user' ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                 <input type="hidden" name="user" class="form-control" value="<?php echo $row['id'];?>">
             </div> 
         <?php } ?>

                 
                <div class="row">
                <div class="col-md-6 form-group">
                <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span>Save</button>  
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
  
        <script>
        function populate(s1,s2)
  {
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML ="";
    if (s1.value == "Southen") {
        var optionarray = ['muhanga|Muhanga','ruhango|Ruhango','nyanza|Nyanza','huye|Huye','kamonyi|Kamonyi'];
    }
    else if (s1.value == "Northen") {
        var optionarray = ['musanze|Musanze','burera|Burera','gicumbi|Gicumbi'];
    }
    for (var option in optionarray) {
        var pair = optionarray[option].split("|");
        var newoption = document.createElement("option");
        newoption.value = pair[0];
        newoption.innerHTML=pair[1];
        s2.options.add(newoption);
    }
  }
  function sector(c1,c2)
  {
    var c1 = document.getElementById(c1);
    var c2 = document.getElementById(c2);
    c2.innerHTML ="";
    if (c1.value == "Muhanga") {
        var optionarray = ['cyeza|Cyeza','shyogwe|Shyogwe'];
    }
    else if (s1.value == "Northen") {
        var optionarray = ['musanze|Musanze','burera|Burera','gicumbi|Gicumbi'];
    }
    for (var option in optionarray) {
        var pair = optionarray[option].split("|");
        var newoption = document.createElement("option");
        newoption.value = pair[0];
        newoption.innerHTML=pair[1];
        c2.options.add(newoption);
    }
  }
  </script>
	
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